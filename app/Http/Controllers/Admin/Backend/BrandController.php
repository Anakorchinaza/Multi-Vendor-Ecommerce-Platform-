<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Flasher\Prime\FlasherInterface;
use Image;
use Illuminate\Support\Carbon;

class BrandController extends Controller
{
    public function AllBrands(){
        $allBrands = Brand::latest()->get();
        return view('admin.backend.brands.all_brand', compact('allBrands'));
    }//end method

    public function AddBrands(){
        return view('admin.backend.brands.add_brand');
    }//end method

    public function StoreBrands(Request $request){
        //validate data from the form
        $request->validate([
            'brand_name' => 'required',
            'brand_image' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);//end validate

        $image = $request->file('brand_image');
        $name_gen = hexdec(uniqid()) .'.'. $image->getClientOriginalName();
        Image::make($image)->resize(300,300)->save('upload/brand/'.$name_gen);
        $filename = 'upload/brand/'.$name_gen;
        
        //insert into database
        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
            'brand_image' => $filename,
            'created_at' => Carbon::now(), 
        ]);
        
        session()->flash("success", "Brand Added Successfully");
        return redirect(route('all.brand'));
        
    }//end method

    public function EditBrands($id){
        $editBrand = Brand::findOrFail($id);
        return view('admin.backend.brands.edit_brand', compact('editBrand'));
    }//end Method

    public function UpdateBrands(Request $request){

        $updateId =  $request -> id ;
        $old_img =  $request -> oldImage ;

        if ($request->file('brand_image')) {

            $image= $request->file('brand_image') ;
            $img = hexdec(uniqid()) .'.'. $image->getClientOriginalName();
            $location='upload/brand/' .$img ;
            Image::make($image)->resize(300,300)->save($location) ;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Brand::findorFail($updateId)->Update([
                'brand_name'=>$request-> brand_name,
                'brand_slug'=>strtolower ( str_replace (' ','-',$request-> brand_name ) ),
                'brand_image'=>$location
            ]) ;

            session()->flash("success", "Brand Updated Successfully");
            return redirect(route('all.brand'));
        }else{
            Brand::findOrfail($updateId)->Update ([
                'brand_name'=>$request-> brand_name,
                'brand_slug'=>strtolower ( str_replace (' ','-',$request-> brand_name ))
            ] );
        }
            session()->flash("success", "Brand Updated Successfully");
            return redirect(route('all.brand'));       
                        
    }//end method

    public function DeleteBrands($id){
        // dd($id);
        $deleteData = Brand::findOrFail($id);
        @unlink($deleteData->brand_image);//for delete image from folder
        $deleteData->Delete();//for delete data from database
        //Brand::table('products')->where('brand_id' ,$id )->delete() ;// for delete product with this brands
        session()->flash ("success" ,"Brand Deleted Successfullly") ;
        return back () ;

    }//end mehtod
            
    





}
