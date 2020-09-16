<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function form(Request $request)
    {
        request()->validate([
           'email'=>'required'
        ]);
        $data = request()->only('email');
        Subscribe::create($data);

        return back();
    }

}
