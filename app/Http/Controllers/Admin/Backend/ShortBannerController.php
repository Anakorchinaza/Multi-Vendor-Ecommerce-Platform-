<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ShortBanner;
use Image;
use Illuminate\Support\Carbon;


class ShortBannerController extends Controller
{
    public function AllShortBanner(){
        $shortbanner = ShortBanner::latest()->get();
        return view('admin.backend.shortbanner.all_short_banner', compact('shortbanner'));
    }//end method 

    public function AddShortBanner(){
        return view('admin.backend.shortbanner.add_short_banner');
    }//end method

    public function StoreShortBanner(Request $request){
        //validate data from the form
        $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'url' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,webp',

        ]);//end validate

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) .'.'. $image->getClientOriginalName();
        Image::make($image)->resize(610,200)->save('upload/short_banner/'.$name_gen);
        $filename = 'upload/short_banner/'.$name_gen;
        
        //insert into database
        ShortBanner::insert([
            'title' => $request->title,
            'short_desc' => $request->short_desc, 
            'url' => $request->url,
            'image' => $filename,
            'created_at' => Carbon::now(), 
        ]);
        
        session()->flash("success", "Short Banner Added Successfully");
        return redirect(route('all.short.banner'));
    }//end method

    public function EditShortBanner($id){
        $editshortbanner = ShortBanner::findOrFail($id);
        return view('admin.backend.shortbanner.edit_short_banner', compact('editshortbanner'));
    }//end method

    public function UpdateShortBanner(Request $request){
        $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'url' => 'required',
            'image' =>'image|mimes:jpeg,png,jpg,gif,webp',

        ]);//end validate

        $shortbannerId =  $request -> id ;
        $old_img =  $request -> oldImage ;

        if ($request->file('image')) {

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) .'.'. $image->getClientOriginalName();
            Image::make($image)->resize(610,200)->save('upload/short_banner/'.$name_gen);
            $filename = 'upload/short_banner/'.$name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            ShortBanner::findorFail($shortbannerId)->Update([
                'title' => $request->title,
                'short_desc' => $request->short_desc, 
                'url' => $request->url,
                'image' => $filename,
                'created_at' => Carbon::now(), 
            ]) ;

            session()->flash("success", "Short Banner Updated Successfully");
            return redirect(route('all.short.banner'));
        }else{
            ShortBanner::findOrfail($shortbannerId)->Update ([
                'title' => $request->title,
                'short_desc' => $request->short_desc, 
                'url' => $request->url,
            ] );
        }
            session()->flash("success", "Short Banner Updated Successfully");
            return redirect(route('all.short.banner')); 
    }//end method

    public function DeleteShortBanner($id){
        $deleteData =  ShortBanner::findOrFail($id);
        @unlink($deleteData->image);//for delete image from folder
        $deleteData->Delete();//for delete data from database
        session()->flash ("success" ,"Short Banner Deleted Successfullly") ;
        return back () ;
    }//end method




}
