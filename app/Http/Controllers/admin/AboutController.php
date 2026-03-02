<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\AboutSettings;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function AdminAboutPage()
    {
        $about = AboutSettings::first();
        return view('admin.about.about_management', compact('about'));
    }

    public function updateAbout(Request $request)
    {
        $about = AboutSettings::first();

        if (!$about) {
            $about = new AboutSettings();
        }

        if ($request->hasFile('header_image')) {
            $image = $request->file('header_image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('about_images'), $imageName);
            $about->header_image = $imageName;
        }

        $about->about_description = $request->about_description;
        $about->history = $request->history;
        $about->vision_mission = $request->vision_mission;
        $about->contact_info = $request->contact_info;
        $about->campuses = $request->campuses;
        $about->hymn_link = $request->hymn_link;

        $about->save();

        return back()->with('success', 'About Page Updated Successfully');
    }
}
