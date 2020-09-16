<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\Create;
use App\Http\Requests\Category\Update;
use App\Models\Category;

use App\Models\NewsCategory;
use App\Models\NewsComment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = Category::all();

        return view('admin.category.index', compact('categorys'));
    }

    public function showCreateForm()
    {
        $activeLang = 'az';
        return view('admin.category.create', compact('activeLang'));
    }

    public function create(Create $request)
    {
        $validated = $request->validated();
        $category = new Category();
        $category->createFromRequest($validated);
        return redirect()->back();
    }

    public function showUpdateForm(int $id)
    {
        $activeLang = 'az';
        $entry = Category::where('id', $id)->firstOrFail();
        return view('admin.category.update', compact('activeLang', 'entry'));
    }

    public function update(Update $request, int $id)
    {
        $validated = $request->validated();
        $news = Category::where('id',$id)->firstOrFail();

        $news->updateFromRequest($validated);
        return redirect()->back();
    }
    public function delete(int $id)
    {
        Category::where('id', $id)->delete();
        NewsCategory::where('news_id', $id)->delete();
        NewsComment::where('news_id', $id)->delete();
        return redirect()->back()
            ->with('mesajx', ('Uğurla silindi'))
            ->with('mesaj_tip', 'warning');
    }
}
