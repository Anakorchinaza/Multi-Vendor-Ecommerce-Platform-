<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class VendorController extends Controller
{
    public function VendorDashboard(){
        return view('vendor.index');
    }//end Method


    public function VendorLogin(){
        return view('vendor.vendor_login');
    }//end method


    public function VendorLogout(Request $request, FlasherInterface $flasher): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $flasher->addSuccess('Logout successfully!');
        return redirect('/vendor/login');
    }//end method


    public function VendorProfile(){
        $id = Auth::user()->id;
        $vendorData = User::find($id);
        return view('vendor.vendor_profile', compact('vendorData'));
    }//end method


    public function VendorUpdateProfile(Request $request, FlasherInterface $flasher){
        $id = Auth::user()->id;
        $data = User::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'vendor_joined' => 'required',
            'vendor_shop_info' => 'required'
        ]);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->vendor_joined = $request->vendor_joined;
        $data->vendor_shop_info = $request->vendor_shop_info;


        // Upload and save the new image
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/vendor_images/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/vendor_images'), $filename);
            $data['image'] = $filename;

        }

        // dd($data);
        $data->save();
        // Toastr::success('Profile Updated Successfully','Success');
        $flasher->addSuccess('Updated successfully!');
        return redirect()->back();

    }//end method


    public function VendorChangePassword(){
        return view('vendor.vendor_change_password');
    }//end method


    public function VendorUpdatePassword(Request $request){
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
        return back()->with("success", "Password Updated Sucessfully");

    }//end method

    public function BecomeVendor(){
        return view('auth.become_vendor');
    }//end method

    public function RegisterVendor(Request $request, FlasherInterface $flasher){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required'],
            'vendor_joined' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'vendor_joined' => $request->vendor_joined,
            'password' => Hash::make($request->password),
            'role' => 'vendor',
            'status' => 'inactive',
        ]);

        $flasher->addSuccess('Registered successfully!');
        return redirect()->route('vendor.login');

       
    }//end method

   




}
