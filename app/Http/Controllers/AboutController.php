<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Setting;

class AboutController extends Controller
{
    public function index(){
        $ads = Ad::all();
        $settings = Setting::all()->first();
        return view('about',compact('ads','settings'));
    }
}
