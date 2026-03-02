<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutSettings extends Model
{
    protected $fillable = [
        'header_image',
        'about_description',
        'history',
        'vision_mission',
        'contact_info',
        'campuses',
        'hymn_link'
    ];
}
