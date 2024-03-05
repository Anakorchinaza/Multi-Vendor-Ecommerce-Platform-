<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.index');
    }//end Method


    public function AdminLogin(){
        return view('admin.admin_login');
    }//end method


    public function AdminProfile(){
        $id = Auth::user()->id;
        $adminData = User::find($id);
        return view('admin.admin_profile', compact('adminData'));
    }//end method


    public function AdminUpdate_profile(Request $request, FlasherInterface $flasher){
        $id = Auth::user()->id;
        $data = User::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;


        // Upload and save the new image
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/admin_images/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'), $filename);
            $data['image'] = $filename;

        }

        // dd($data);
        $data->save();
        // Toastr::success('Profile Updated Successfully','Success');
        $flasher->addSuccess('Profile Updated successfully!');
        return redirect()->back();

    }//end method


    public function AdminChangePassword(){
        return view('admin.admin_change_password');
    }//end method



    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }//end method


    public function AdminUpdatePassword(Request $request ){
        //validate
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        //match the old password
        if (!Hash::check($request->old_password, auth::user()->password)) {
            return back()->with("error", "Old Password Doesn't Match!!!");
        }

        //update new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("success", "Password Updated Successfully");

    }//end method


    public function InactiveVendor(){
        $inactive_vendor = User::where('status', 'inactive')->where('role', 'vendor')->latest()->get();
        return view("admin.backend.vendor.inactive_vendor", compact('inactive_vendor'));
    }//end method

    public function ActiveVendor(){
        $active_vendor = User::where('status', 'active')->where('role', 'vendor')->latest()->get();
        return view("admin.backend.vendor.active_vendor", compact('active_vendor'));
    }//end method

    public function InactiveVendorDetails($id){
        $inactive_vendor_details = User::findOrFail($id);
        return view("admin.backend.vendor.inactive_vendor_details", compact('inactive_vendor_details'));

    }//end method

    public function ApproveVendor(Request $request){
        $vendor_id = $request->id;
        $user = User::findOrFail($vendor_id)->update([
            'status' => 'active',
        ]);

        return redirect()->route('active.vendor')->with("success", "Approved Successfully");

    }//end method

    public function ActiveVendorDetails($id){
        $active_vendor_details = User::findOrFail($id);
        return view("admin.backend.vendor.active_vendor_details", compact('active_vendor_details'));
    }//end method

    public function DisapproveVendor(Request $request){
        $vendor_id = $request->id;
        $user = User::findOrFail($vendor_id)->update([
            'status' => 'inactive',
        ]);

        return redirect()->route('inactive.vendor')->with("success", "Disapproved Successfully");
    }//end Method

   




}
