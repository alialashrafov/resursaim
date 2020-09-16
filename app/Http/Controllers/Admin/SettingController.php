<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\Save;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function showUpdateForm(){
        $activeLang = 'en';
        $entry = Setting::all()->first();
        return view('admin.settings.form', compact('entry','activeLang'));

    }

    public function update(Save $request, int $id){
        $validated = $request->validated();
        $settings = Setting::where('id',$id)->firstOrFail();
        $settings->updateFromRequest($validated);
        return redirect()->back();
    }
}
