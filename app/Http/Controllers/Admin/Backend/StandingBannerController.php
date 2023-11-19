<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StandingBanner;
use Image;
use Illuminate\Support\Carbon;
use PhpParser\PrettyPrinter\Standard;

class StandingBannerController extends Controller
{
    public function AllStandingBanner(){
        $standingbanner = StandingBanner::latest()->get();
        return view('admin.backend.standingbanner.all_stand_banner', compact('standingbanner'));
    }//end method

    public function AddStandingBanner(){
        return view('admin.backend.standingbanner.add_stand_banner');
    }//end method

    public function StoreStandBanner(Request $request){
         //validate data from the form
         $request->validate([
            'title' => 'required',
            'short_desc' => 'required',
            'url' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,webp',

        ]);//end validate

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) .'.'. $image->getClientOriginalName();
        Image::make($image)->resize(295,673)->save('upload/standing_banner/'.$name_gen);
        $filename = 'upload/standing_banner/'.$name_gen;
        
        //insert into database
        StandingBanner::insert([
            'title' => $request->title,
            'short_desc' => $request->short_desc, 
            'url' => $request->url,
            'image' => $filename,
            'created_at' => Carbon::now(), 
        ]);
        
        session()->flash("success", "Banner Added Successfully");
        return redirect(route('all.standing.banner'));
    }//end method

    public function EditStandBanner($id){
        $editstandbanner = StandingBanner::findOrFail($id);
        return view('admin.backend.standingbanner.edit_stand_banner', compact('editstandbanner'));
    }//end method

    public function UpdateStandBanner(Request $request){
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
            Image::make($image)->resize(295,673)->save('upload/standing_banner/'.$name_gen);
            $filename = 'upload/standing_banner/'.$name_gen;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            StandingBanner::findorFail($shortbannerId)->Update([
                'title' => $request->title,
                'short_desc' => $request->short_desc, 
                'url' => $request->url,
                'image' => $filename,
                'created_at' => Carbon::now(), 
            ]) ;

            session()->flash("success", "Banner Updated Successfully");
            return redirect(route('all.standing.banner'));
        }else{
            StandingBanner::findOrfail($shortbannerId)->Update ([
                'title' => $request->title,
                'short_desc' => $request->short_desc, 
                'url' => $request->url,
            ] );
        }
            session()->flash("success", "Banner Updated Successfully");
            return redirect(route('all.standing.banner')); 
    }//end method

    public function DeleteStandBanner($id){
        $deleteData =  StandingBanner::findOrFail($id);
        @unlink($deleteData->image);//for delete image from folder
        $deleteData->Delete();//for delete data from database
        session()->flash ("success" ,"Banner Deleted Successfullly") ;
        return back () ;
    }//end method





}
