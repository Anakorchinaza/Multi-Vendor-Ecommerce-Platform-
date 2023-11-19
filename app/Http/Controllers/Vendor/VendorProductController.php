<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Brand;
use App\Models\User;
use App\Models\ChildSubCategory;
use App\Models\MultiImage;
use Image;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class VendorProductController extends Controller
{
    public function VendorAllProduct(){
        $id = Auth::user()->id;
        $all_Vendor_product = Product::where('vendor_id', $id)->latest()->get();
        return view('vendor.product.vendor_all_product', compact('all_Vendor_product')); 
    }//end method

    public function VendorAddProduct(){
        $all_brands = Brand::latest()->get();
        $all_category = Category::latest()->get();
        return view('vendor.product.vendor_add_product', compact('all_brands', 'all_category'));
  
    }//end method

    public function GetSubcategories($parentCategoryId){
        $subcategories = Subcategory::where('category_id', $parentCategoryId)->get();
        return response()->json($subcategories);
    }//end method

    public function GetChildSubcategories($SubCategoryId){
        $childsubcategories = ChildSubCategory::where('subcategory_id', $SubCategoryId)->orderBy('child_subcategory_name', 'ASC')->get();
        // return response()->json($childsubcategories);
        return json_encode($childsubcategories);
    }//end method

    public function VendorStoreProduct(Request $request){
        // Define custom attribute names and labels
        $customAttributes = [
            'product_name' => 'Product Name',
            'product_tags' => 'Product Tags',
            'product_color' => 'Product Color',
            'product_size' => 'Product Size',
            'short_descp' => 'Short Description',
            'specification' => 'Specification',
            'long_descp' => 'Long Description',
            'product_thumbnail' => 'Product Thumbnail',
            // 'multi_image' => 'Multi Image',
            'selling_price' => 'Selling Price',
            'product_code' => 'Product Code',
            'product_qty' => 'Product Quantity',
            'category_id' => 'Category',
            'subcategory_id' => 'Subcategory',
            'child_sub_category_id' => 'Child Subcategory',
            // Add more as needed...
        ];

        $request->validate([
            'product_name' =>'required',
            'product_tags' =>'required',
            'product_color' =>'required',
            'product_size' =>'required',
            'short_descp' =>'required',
            'specification' =>'required',
            'long_descp' =>'required',
            'product_thumbnail' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'multi_image' =>'required|image|max:2048',
            'selling_price' =>'required',
            'product_code' =>'required',
            'product_qty' =>'required',
            'category_id' =>'required',
            'subcategory_id' =>'required',
            'child_sub_category_id' =>'required',

        ], [], $customAttributes);//end validate

        $image = $request->file('product_thumbnail');
        $name_gen = hexdec(uniqid()) .'.'. $image->getClientOriginalName();
        Image::make($image)->resize(800,900)->save('upload/products/thumbnails/'.$name_gen);
        $filename = 'upload/products/thumbnails/'.$name_gen;

        //insert into database
        $product_id = Product::insertGetId([
            'brand_id' => $request -> brand_id,
            'category_id' => $request -> category_id,
            'subcategory_id' => $request -> subcategory_id,
            'child_sub_category_id' => $request -> child_sub_category_id,
            'product_name' => $request->product_name,
            'product_slug' => strtolower(str_replace(' ', '-', $request->product_name)),
            'product_code' =>$request-> product_code ,
            'product_qty'=>$request->product_qty,
            'product_tags'=>$request->product_tags,
            'product_size'=>$request->product_size,
            'product_color' =>$request-> product_color ,
            'selling_price' =>$request-> selling_price ,
            'discount_price'=>$request->discount_price,
            'short_descp'=>$request->short_descp,
            'long_descp'=>$request->long_descp,
            'specification'=>$request->specification,
            'product_thumbnail' => $filename,
            'vendor_id'=> Auth::user()->id,
            'featured'=>$request->featured,
            'most_popular'=>$request->most_popular,
            'best_selling'=>$request->best_selling,
            'new_arrival'=>$request->new_arrival,
            'status'=> 1,	
            'created_at' => Carbon::now(), 
        ]);

        //if successful, insert multi-img
        $images = $request->file('multi_image');
        foreach ($images as $item) {
            $name_gens = hexdec(uniqid()) .'.'. $item->getClientOriginalName();
            Image::make($item)->resize(800,900)->save('upload/products/multi-images/'.$name_gens);
            $filenames = 'upload/products/multi-images/'.$name_gens;

            //insert
            MultiImage::insert([
                'product_id' => $product_id,
                'image_name' => $filenames,
                'created_at' => Carbon::now(),
            ]);
        }

        session()->flash("success", "Product Added Successfully");
        return redirect(route('vendor.all.product'));
    }//end method

    public function VendorEditProduct($id){
        $multi_imgs = MultiImage::where('product_id', $id)->get();
        $all_brands = Brand::latest()->get();
        $all_category = Category::latest()->get();
        $all_products = Product::findOrFail($id);
        $subcategory = Subcategory::where('id', $all_products->subcategory_id)->get();
        $childsub = ChildSubcategory::where('id', $all_products->child_sub_category_id)->get();
        return view('vendor.product.vendor_edit_product', compact('all_brands', 'all_category', 'all_products', 'subcategory', 'childsub', 'multi_imgs'));
    }//end method

    public function VendorUpdateProduct(Request $request){
        $product_id = $request->id; 
        Product::findOrFail($product_id)->update([
            'brand_id' => $request -> brand_id,
            'category_id' => $request -> category_id,
            'subcategory_id' => $request -> subcategory_id,
            'child_sub_category_id' => $request -> child_sub_category_id,
            'product_name' => $request->product_name,
            'product_slug' => strtolower(str_replace(' ', '-', $request->product_name)),
            'product_code' =>$request-> product_code ,
            'product_qty'=>$request->product_qty,
            'product_tags'=>$request->product_tags,
            'product_size'=>$request->product_size,
            'product_color' =>$request-> product_color ,
            'selling_price' =>$request-> selling_price ,
            'discount_price'=>$request->discount_price,
            'short_descp'=>$request->short_descp,
            'long_descp'=>$request->long_descp,
            'specification'=>$request->specification,
            'featured'=>$request->featured,
            'most_popular'=>$request->most_popular,
            'best_selling'=>$request->best_selling,
            'new_arrival'=>$request->new_arrival,
            'status'=> 1,	
            'updated_at' => Carbon::now(), 
        ]);

        session()->flash("success", "Product Updated Successfully");
        return redirect(route('vendor.all.product'));
    }//end method

    public function VendorUpdateProductThumbnail(Request $request){
        $product_id = $request->id;
        $old_thumbnail = $request->old_thumbnail;

        $image = $request->file('product_thumbnail');
        $name_gen = hexdec(uniqid()) .'.'. $image->getClientOriginalName();
        Image::make($image)->resize(800,900)->save('upload/products/thumbnails/'.$name_gen);
        $filename = 'upload/products/thumbnails/'.$name_gen;

        if (file_exists($old_thumbnail)) {
            unlink($old_thumbnail);
        }

        Product::findOrFail($product_id)->update([
            'product_thumbnail' => $filename,
            'updated_at' => Carbon::now()
        ]);

        session()->flash("success", "Product Thumbnail Updated Successfully");
        return redirect()->back();
    }//end method


    public function VendorUpdateProductMultiimg(Request $request){
        $customAttributes = [
            'multi_imgs' => 'Image',
        ];
        $request->validate([
            'multi_imgs' =>'required',
        ], [], $customAttributes);

        $images = $request->multi_imgs;
        foreach ($images as $id => $img) {
            $imgDelete = MultiImage::findOrFail($id);
            unlink($imgDelete->image_name);
            $name_gens = hexdec(uniqid()) .'.'. $img->getClientOriginalName();
            Image::make($img)->resize(800,900)->save('upload/products/multi-images/'.$name_gens);
            $filenames = 'upload/products/multi-images/'.$name_gens;

            MultiImage::where('id', $id)->update([
                'image_name' => $filenames,
                'updated_at' => Carbon::now(),
            ]);

        }

        session()->flash("success", "Product Multi-Image Updated Successfully");
        return redirect()->back();
    }//end method


    public function VendorProductMultiimgDelete($id){
        $oldimgs = MultiImage::findOrFail($id);
        unlink($oldimgs->image_name);

        MultiImage::findOrFail($id)->delete();

        session()->flash("success", "Image Deleted Successfully");
        return redirect()->back();
    }//end method

    public function VendorProductInactive($id){
        Product::findOrFail($id)->update(['status' => 0]);
        session()->flash("success", "Product Deactivated Successfully");
        return redirect()->back();
    }//end method

    public function VendorProductActive($id){
        Product::findOrFail($id)->update(['status' => 1]);
        session()->flash("success", "Product Activated Successfully");
        return redirect()->back();
    }//end method

    public function VendorProductDelete($id){
        $product = Product::findOrFail($id);
        unlink($product->product_thumbnail);
        Product::findOrFail($id)->delete();

        $images = MultiImage::where('product_id', $id)->get();
        foreach ($images as $value) {
            unlink($value->	image_name);
            MultiImage::where('product_id', $id)->delete();
        }

        session()->flash("success", "Product Deleted Successfully ");
        return redirect()->back();
    }//end method





}
