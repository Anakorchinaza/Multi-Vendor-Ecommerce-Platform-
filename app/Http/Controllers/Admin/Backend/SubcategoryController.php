<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Carbon;


class SubcategoryController extends Controller
{
    public function AllSubcategory(){
        $allSubcategory = Subcategory::latest()->get();
        return view('admin.backend.sub-category.all_subcategory', compact('allSubcategory'));
    }//end method

    public function AddSubcategory(){
        $categories = Category::orderBy('category_name')->get();
        return view('admin.backend.sub-category.add_subcategory', compact('categories'));
    }//end method

    public function InsertSubcategory(Request $request){
           //validate data from the form
        $request->validate([
            'subcategory_name' => 'required',
            'category' =>'required',

        ]);//end validate

         //insert into database
        Subcategory::insert([
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-', $request->subcategory_name)),
            'category_id' => $request->category,
            'created_at' => Carbon::now(), 
        ]);
        
        session()->flash("success", "Sub-Category Added Successfully");
        return redirect(route('all.subcategory'));
    }//end method


    public function EditSubcategory($id){
        $categories = Category::orderBy('category_name', 'ASC')->get();
        $editSubcategory = Subcategory::findOrFail($id);
        return view('admin.backend.sub-category.edit_subcategory', compact('categories','editSubcategory'));
    }//end method

    public function UpdateSubcategory(Request $request){
        $subcategoryId =  $request -> id ;

            Subcategory::findOrfail($subcategoryId)->Update ([
                'subcategory_name'=>$request-> subcategory_name,
                'subcategory_slug'=>strtolower ( str_replace (' ','-',$request-> subcategory_name )),
                'category_id' => $request-> category,
                'created_at' => Carbon::now(), 
            ] );

            session()->flash("success", "SubCategory Updated Successfully");
            return redirect(route('all.subcategory')); 
    }//end method

    public function DeleteSubcategory($id){
        $deleteData = Subcategory::findOrFail($id);
        $deleteData->Delete();//for delete data from database
        session()->flash ("success" ,"Sub-Category Deleted Successfully") ;
        return back () ;
    }//end method



}
