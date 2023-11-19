<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LongBanner;
use Image;
use Illuminate\Support\Carbon;

class LongBannerController extends Controller
{
    public function AddLongBanner(){
        return view('admin.backend.longbanner.add_long_banner');
    }//end method

    public function AllLongBanner(){
        $longbanner = LongBanner::latest()->get();
        // dd($categories);
        return view('admin.backend.longbanner.all_long_banner',compact('longbanner'));
    }//end method

    public function StoreLongBanner(Request $request){
            //validate data from the form
        $request->validate([
            'discount' => 'required',
            'title' => 'required',
            'short_desc' => 'required',
            'url' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,webp',

        ]);//end validate

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) .'.'. $image->getClientOriginalName();
        Image::make($image)->resize(1240,198)->save('upload/long_banner/'.$name_gen);
        $filename = 'upload/long_banner/'.$name_gen;
        
        //insert into database
        LongBanner::insert([
            'discount' => $request->discount,
            'title' => $request->title,
            'short_desc' => $request->short_desc, 
            'url' => $request->url,
            'image' => $filename,
            'created_at' => Carbon::now(), 
        ]);
        
        session()->flash("success", "Long Banner Added Successfully");
        return redirect(route('all.long.banner'));
    }//end method


    public function EditLongBanner($id){
        $editlongbanner = LongBanner::findOrFail($id);
        return view('admin.backend.longbanner.edit_long_banner', compact('editlongbanner'));
    }//end method

    public function UpdateLongBanner(Request $request){
        
        $request->validate([
            'discount' => 'required',
            'title' => 'required',
            'short_desc' => 'required',
            'url' => 'required',
            'image' =>'image|mimes:jpeg,png,jpg,gif,webp',

        ]);//end validate

        $longbannerId =  $request -> id ;
        $old_img =  $request -> oldImage ;

        if ($request->file('image')) {

            $image= $request->file('image') ;
            $img = hexdec(uniqid()) .'.'. $image->getClientOriginalName();
            $location='upload/long_banner/' .$img ;
            Image::make($image)->resize(1240,198)->save($location) ;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            LongBanner::findorFail($longbannerId)->Update([
                'discount' => $request->discount,
                'title' => $request->title,
                'short_desc' => $request->short_desc, 
                'url' => $request->url,
                'image' => $location,
                'created_at' => Carbon::now(), 
            ]) ;

            session()->flash("success", "Long Banner Updated Successfully");
            return redirect(route('all.long.banner'));
        }else{
            LongBanner::findOrfail($longbannerId)->Update ([
                'discount' => $request->discount,
                'title' => $request->title,
                'short_desc' => $request->short_desc, 
                'url' => $request->url,
            ] );
        }
            session()->flash("success", "Long Banner Updated Successfully");
            return redirect(route('all.long.banner'));   
    }//end method

    public function DeleteLongBanner($id){
        $deleteData =  LongBanner::findOrFail($id);
        @unlink($deleteData->image);//for delete image from folder
        $deleteData->Delete();//for delete data from database
        session()->flash ("success" ,"Long Banner Deleted Successfullly") ;
        return back () ;
    }//end method




}
