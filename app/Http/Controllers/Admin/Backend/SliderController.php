<?php

namespace App\Http\Controllers\Admin\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Image;
use Illuminate\Support\Carbon;

class SliderController extends Controller
{
    public function AllSlider(){
        $sliders = Slider::latest()->get();
        // dd($categories);
        return view('admin.backend.slider.all_slider',compact('sliders'));
    }//end method

    public function AddSlider(){
        return view('admin.backend.slider.add_slider');
    }//end method

    public function StoreSlider(Request $request){
           //validate data from the form
        $request->validate([
            'frs_title' => 'required',
            'sec_tile' => 'required',
            'small_desc' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,webp',

        ]);//end validate

        $image = $request->file('image');
        $name_gen = hexdec(uniqid()) .'.'. $image->getClientOriginalName();
        Image::make($image)->resize(1903,520)->save('upload/slider/'.$name_gen);
        $filename = 'upload/slider/'.$name_gen;
        
        //insert into database
        Slider::insert([
            'frs_title' => $request->frs_title,
            'sec_tile' => $request->sec_tile,
            'small_desc' => $request->small_desc,
            'image' => $filename,
            'created_at' => Carbon::now(), 
        ]);
        
        session()->flash("success", "Slider Added Successfully");
        return redirect(route('all.slider'));
    }//end method

    public function EditSlider($id){
        $editSlider = Slider::findOrFail($id);
        return view('admin.backend.slider.edit_slider', compact('editSlider'));
    }//end method

    public function UpdateSlider(Request $request){

        $request->validate([
            'frs_title' => 'required',
            'sec_tile' => 'required',
            'small_desc' => 'required',
            'image' =>'image|mimes:jpeg,png,jpg,gif,webp',

        ]);//end validate

        $sliderId =  $request -> id ;
        $old_img =  $request -> oldImage ;

        if ($request->file('image')) {

            $image= $request->file('image') ;
            $img = hexdec(uniqid()) .'.'. $image->getClientOriginalName();
            $location='upload/slider/' .$img ;
            Image::make($image)->resize(1903,520)->save($location) ;

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Slider::findorFail($sliderId)->Update([
                'frs_title' => $request->frs_title,
                'sec_tile' => $request->sec_tile,
                'small_desc' => $request->small_desc,
                'image' => $location,
                'created_at' => Carbon::now(), 
            ]) ;

            session()->flash("success", "Slider Updated Successfully");
            return redirect(route('all.slider'));
        }else{
            Slider::findOrfail($sliderId)->Update ([
                'frs_title' => $request->frs_title,
                'sec_tile' => $request->sec_tile,
                'small_desc' => $request->small_desc,
            ] );
        }
            session()->flash("success", "Slider Updated Successfully");
            return redirect(route('all.slider'));       
    }//end method

    public function DeleteSlider($id){
        // dd($id);
        $deleteData = Slider::findOrFail($id);
        @unlink($deleteData->image);//for delete image from folder
        $deleteData->Delete();//for delete data from database
        //Brand::table('products')->where('brand_id' ,$id )->delete() ;// for delete product with this brands
        session()->flash ("success" ,"Slider Deleted Successfullly") ;
        return back () ;
    }//end method



}
