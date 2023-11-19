<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Flasher\Prime\FlasherInterface;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UserDashboard(){
        $id = Auth::user()->id;
        $userData = User::find($id);
        return view('user.index', compact('userData'));
    }//end method

    public function UserUpdate_profile(Request $request, FlasherInterface $flasher){
        $id = Auth::user()->id;
        $data = User::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;


        // Upload and save the new image
        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/'.$data->image));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['image'] = $filename;

        }

        // dd($data);
        $data->save();
        // Toastr::success('Profile Updated Successfully','Success');
        $flasher->addSuccess('Profile Updated successfully!');
        return redirect()->back();
    }//end method

    public function UserLogout(Request $request, FlasherInterface $flasher): RedirectResponse {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $flasher->addSuccess('Logout successfully!');
        return redirect('/login');
    }//end method

    public function UserUpdatePassword(Request $request){
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

    
}
