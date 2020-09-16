<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\CategoryTranslation;
use App\Models\NewsCategory;
use App\Models\Newz;
use App\Providers\AppServiceProvider;


class CategoryController extends Controller
{
    public function index($cslug)
    {
        $ads = Ad::all();
        $category = CategoryTranslation::where('slug', $cslug)->first();
        $catnews = NewsCategory::where('cat_id',$category->cat_id)->orderBy('created_at', 'DESC')->get();
        $forcat = Category::where('id',$category->cat_id)->first();
        $count = 0;
        foreach($catnews as $k=>$catnew)
        {
            if($catnew->news_id) {
                $datas[] = $catnew->news_id;
                $count = 1;
            }
        }
        if($count == 1) {
            $newsz = Newz::whereIn('id', $datas)->paginate(20);
        }else{
            $newsz = null;
        }
        return view('category', compact('newsz','category','ads', 'forcat'));
    }
}
