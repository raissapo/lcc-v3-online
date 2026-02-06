<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function AboutPage()
    {
        return view('about');
    }
}
