<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index()
    {
        $ads = Ad::all();
        return view('admin.ads.index',compact('ads'));
    }
    public function form($id = null)
    {
        $entry = new Ad();
        if($id) $entry = Ad::find($id);
        return view('admin.ads.form', compact('entry'));
    }
    public function save(Request $request, $id = 0)
    {
        $validated = $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        $data = request()->only('name','description');

        if($id > 0) {
            $entry = Ad::where('id', $id)->firstOrFail();
            $entry->update($data);
        }

        return redirect()
            ->route('admin.ads.edit',$entry->id)
            ->with('mesaj', ($id > 0 ? 'Düzəliş edildi!' : 'Qeyd Olundu.'))
            ->with('mesaj_tip', 'success');
    }
}
