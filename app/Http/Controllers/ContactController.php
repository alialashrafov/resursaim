<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $ads = Ad::all();
        $settings = Setting::all()->first();
        return view('contact',compact('ads','settings'));
    }
    public function form(Request $request)
    {
        $validated = request()->validate([
           'name' =>    'required',
           'email' =>   'required',
           'website' => 'nullable',
           'message' => 'required'
        ]);
        $data = request()->only('name','email','website','message');

        Contact::create($data);
        return back();
    }
}
