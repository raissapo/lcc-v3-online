<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function AdminProfilePage()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile.profile_management', compact('admin'));
    }

    public function UpdateAdminProfile(Request $request)
    {
        $admin = Auth::guard('admin')->user();

        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:admins,email,' . $admin->id,
            'profile_picture' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'password' => 'nullable|min:6'
        ]);

        // Upload Profile Picture
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('admin_images'), $filename);
            $admin->profile_picture = $filename;
        }

        $admin->fullname = $request->fullname;
        $admin->email = $request->email;

        if ($request->password) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return redirect()->back()->with('success', 'Profile updated successfully!');
    }
}
