<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\ChildSubCategory;
use Illuminate\Support\Carbon;

class ChildSubCategoryController extends Controller
{
    public function AddChildsubcategory(){
        $categories = Category::orderBy('category_name')->get();
        return view('admin.backend.child-subcategory.add_childsubcategory', compact('categories'));
    }//end Method

    public function GetSubcategories($parentCategoryId){
        $subcategories = Subcategory::where('category_id', $parentCategoryId)->get();
        return response()->json($subcategories);
    }//end method

    public function InsertChildSubcategory(Request $request){
            //validate data from the form
        $request->validate([
        'child_subcategory_name' => 'required',
        'category' =>'required',
        'subcategory' =>'required',

        ]);//end validate

            //insert into database
        ChildSubCategory::insert([
            'child_subcategory_name' => $request->child_subcategory_name,
            'child_subcategory_slug' => strtolower(str_replace(' ', '-', $request->child_subcategory_name)),
            'category_id' => $request->category,
            'subcategory_id' => $request->subcategory,
            'created_at' => Carbon::now(), 
        ]);
        
        session()->flash("success", "Added Successfully");
        return redirect(route('all.childsubcategory'));
    }//end method

    public function AllChildSubcategory(){
        $allchildSubcategory = ChildSubCategory::latest()->get();
        return view('admin.backend.child-subcategory.all_childsubcategory', compact('allchildSubcategory'));
    }//end method

    public function EditChildSubcategory($id){
        $categories = Category::orderBy('category_name', 'ASC')->get();
        $subcategories = Subcategory::orderBy('subcategory_name', 'ASC')->get();
        $editchildSubcategory = ChildSubCategory::findOrFail($id);
        return view('admin.backend.child-subcategory.edit_childsubcategory', compact('categories','subcategories','editchildSubcategory'));
    }//end method

    public function UpdateChildSubcategory(Request $request){
        $childsubcategoryId =  $request -> id ;

        ChildSubCategory::findOrfail($childsubcategoryId)->Update ([
            'child_subcategory_name'=>$request-> child_subcategory_name,
            'child_subcategory_slug'=>strtolower ( str_replace (' ','-',$request-> child_subcategory_name )),
            'category_id' => $request->category,
            'subcategory_id' => $request->subcategory,
            'created_at' => Carbon::now(), 
        ] );

        session()->flash("success", "Updated Successfully");
        return redirect(route('all.childsubcategory')); 
    }//end method

    public function DeleteChildSubcategory($id){
        $deleteData = ChildSubCategory::findOrFail($id);
        $deleteData->Delete();//for delete data from database
        session()->flash ("success" ,"Deleted Successfully") ;
        return back () ;
    }//end method



}
