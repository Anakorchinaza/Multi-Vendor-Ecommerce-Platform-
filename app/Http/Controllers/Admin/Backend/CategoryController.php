<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Flasher\Prime\FlasherInterface;
use Image;
use Illuminate\Support\Carbon;

class CategoryController extends Controller
{
    public function AddCategory(){
        return view('admin.backend.category.add_category');
    }//end Method

    public function AllCategory(){
        $categories = Category::latest()->get();
        // dd($categories);
        return view('admin.backend.category.all_category',compact('categories'));
    }// end method

    public function InsertCategory(Request $request){
          //validate data from the form
        $request->validate([
            'category_name' => 'required',
            'category_image' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'category_icon' =>'required|image|mimes:jpeg,png,jpg,gif|max:2048',

        ]);//end validate

        $image = $request->file('category_image');
        $name_gen = hexdec(uniqid()) .'.'. $image->getClientOriginalName();
        Image::make($image)->resize(190,184)->save('upload/category/'.$name_gen);
        $filename = 'upload/category/'.$name_gen;

        $image2 = $request->file('category_icon');
        $name_gen2 = hexdec(uniqid()) .'.'. $image2->getClientOriginalName();
        Image::make($image2)->resize(23,25)->save('upload/category_icon/'.$name_gen2);
        $filename2 = 'upload/category_icon/'.$name_gen2;
        
        //insert into database
        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
            'category_image' => $filename, 
            'category_icon' => $filename2,
            'created_at' => Carbon::now(), 
        ]);
        
        session()->flash("success", "Category Added Successfully");
        return redirect(route('all.category'));
        
    }//end method

    public function EditCategory($id){
        $editCategory = Category::findOrFail($id);
        return view('admin.backend.category.edit_category', compact('editCategory'));
    }//end method

    public function UpdateCategory(Request $request){

        $categoryId =  $request -> id ;
        $old_img =  $request -> oldImage ; 
        $oldIcon =  $request -> oldIcon ;

        if ($request->file('category_image')) {

            $image= $request->file('category_image') ;
            $img = hexdec(uniqid()) .'.'. $image->getClientOriginalName();
            $location='upload/category/' .$img ;
            Image::make($image)->resize(190,184)->save($location) ;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Category::findorFail($categoryId)->Update([
                'category_name'=>$request-> category_name,
                'category_slug'=>strtolower ( str_replace (' ','-',$request-> category_name ) ),
                'category_image'=>$location,
                'created_at' => Carbon::now(), 
            ]) ;

            session()->flash("success", "Category Updated Successfully");
            return redirect(route('all.category'));

        }else if ($request->file('category_icon')) {

            $image2 = $request->file('category_icon') ;
            $img2 = hexdec(uniqid()) .'.'. $image2->getClientOriginalName();
            $location2 ='upload/category_icon/' .$img2 ;
            Image::make($image2)->resize(23,25)->save($location2) ;

            if (file_exists($oldIcon)) {
                unlink($oldIcon);
            }

            Category::findorFail($categoryId)->Update([
                'category_name'=>$request-> category_name,
                'category_slug'=>strtolower ( str_replace (' ','-',$request-> category_name ) ),
                'category_icon'=>$location2,
                'created_at' => Carbon::now(), 
            ]) ;

            session()->flash("success", "Category Updated Successfully");
            return redirect(route('all.category'));
        
        }else{
            Category::findOrfail($categoryId)->Update ([
                'category_name'=>$request-> category_name,
                'category_slug'=>strtolower ( str_replace (' ','-',$request-> category_name ))
            ] );
        }
            session()->flash("success", "Category Updated Successfully");
            return redirect(route('all.category'));       
    }//end method

    public function DeleteCategory($id){
        // dd($id);
        $deleteData = Category::findOrFail($id);
        @unlink($deleteData->category_image);//for delete image from folder
        $deleteData->Delete();//for delete data from database
        //Brand::table('products')->where('brand_id' ,$id )->delete() ;// for delete product with this brands
        session()->flash ("success" ,"Category Deleted Successfullly") ;
        return back () ;
    }//end method










}
