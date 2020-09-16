<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscribe;

class SubscribeController extends Controller
{
    public function index()
    {
        $subcribers = Subscribe::all();
        return view('admin.subscribers.index',compact('subcribers'));
    }
    public function delete($id)
    {
        Subscribe::where('id',$id)->delete();
        return redirect()->back()
            ->with('mesajx', ('Uğurla silindi'))
            ->with('mesaj_tip', 'warning');
    }
}
