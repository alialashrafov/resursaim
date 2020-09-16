<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\NewsCategory;
use App\Models\Newz;
use Illuminate\Http\Request;

class CategoryNewsController extends Controller
{
    public function index()
    {
        $ncs = NewsCategory::all();
        return view('admin.nc.index', compact('ncs'));
    }

    public function form($id = null)
    {
        $entry = new NewsCategory();
        if ($id) $entry = NewsCategory::find($id);

        $news = Newz::all();
        $categorys = Category::all();
        return view('admin.nc.form', compact('entry', 'news', 'categorys'));
    }

    public function save(Request $request, $id = 0)
    {
        $validated = request()->validate([
            'news_id' => 'required',
            'cat_id' => 'required'
        ]);

        $data = request()->only('news_id', 'cat_id');

        if ($id > 0) {
            $entry = NewsCategory::where('id', $id)->firstOrFail();
            $entry->update($data);
        } else {
            $entry = NewsCategory::create($data);
        }

        return redirect()
            ->route('admin.nc.edit', $entry->id)
            ->with('mesaj', ($id > 0 ? 'Uğurla yaradıldı' : 'Düzəlişlər qeydə alındı.'))
            ->with('mesaj_tip', 'success');
    }

    public function delete($id)
    {
        NewsCategory::where('id',$id)->delete();
        return redirect()->back()
            ->with('mesaj', ('Uğurla silindi'))
            ->with('mesaj_tip', 'warning');

    }
}
