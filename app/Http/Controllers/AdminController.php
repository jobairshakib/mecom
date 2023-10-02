<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminDashboard()
    {
        return view('admin.admin_dashboard');
    } //end method

    public function AdminLogin()
    {
        return view('admin.admin_login');
    }

    public function VendorLogin()
    {
        return view('vendor.vendor_login');
    }

    public function adminProfile()
    {
        $id = Auth::user()->id;
        $adminData = User::find($id);

        return view('admin.admin_profile', compact('adminData'));
    }

    public function adminChangePassword()
    {
        return view('admin.admin_change_password');
    }//end method
    public function adminUpdatePassword(Request $request)
    //validation
    {
        $request->validate([
            'old_password'=>'required',
            'new_password'=>'required|confirmed'
        ]);
        //match old password
        if(!Hash::check($request->old_password,auth::user()->password)){
            return back()->with("error","Old Password Doesn't Match");
        }
        User::whereId(auth()->user()->id->update([
            'password'=>Hash::make($request->new_password)
        ]));

        return back()->with("status","password Change Successfully");
    }//end method

    public function adminDestroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function adminProfileStore(Request $request)
    {
        $id = Auth()->user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        // Handle photo upload
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . $photo->getClientOriginalExtension();
            $photo->move(public_path('upload/admin_images'), $photoName);
            $data->photo = $photoName;
        }

        $data->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
