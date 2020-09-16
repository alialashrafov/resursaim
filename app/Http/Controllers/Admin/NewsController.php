<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\Create;
use App\Http\Requests\News\Update;
use App\Models\NewsCategory;
use App\Models\NewsComment;
use App\Models\Newz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index()
    {
        $news = Newz::all();
        return view('admin.news.index', compact('news'));
    }




    public function showCreateForm()
    {
        $activeLang = 'en';
        return view('admin.news.create', compact('activeLang'));
    }

    public function create(Create $request)
    {
        $validated = $request->validated();

        $news = new Newz();
        $news->createFromRequest($validated);
        return redirect()->back();
    }

    public function showUpdateForm(int $id)
    {
        $activeLang = 'en';
        $entry = Newz::where('id', $id)->firstOrFail();
        return view('admin.news.update', compact('activeLang', 'entry'));
    }

    public function update(Update $request, int $id)
    {

        $validated = $request->validated();
        $news = Newz::where('id',$id)->firstOrFail();

        $news->updateFromRequest($validated);
        return redirect()->back();
    }
        public function delete(int $id)
    {
        Newz::where('id', $id)->delete();
        NewsCategory::where('news_id', $id)->delete();
        NewsComment::where('news_id', $id)->delete();
        return redirect()->back()
            ->with('mesajx', ('Uğurla silindi'))
            ->with('mesaj_tip', 'warning');
    }

}
