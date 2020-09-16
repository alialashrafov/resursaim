<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use App\Models\Comment;
use App\Models\NewsCategory;
use App\Models\NewsComment;
use App\Models\Newz;
use App\Models\NewzTranslation;

class NewsController extends Controller
{
    public function index($cslug,$nslug)
    {

        $ads = Ad::all();
        $newss = NewzTranslation::where('slug',$nslug)->first();
        $newscat = NewsCategory::where('news_id',$newss->news_id)->first();
        $category = Category::where('id',$newscat->cat_id)->first();
        $newis = Newz::where('id', $newss->news_id)->first();
        $newscoms = NewsComment::where('news_id',$newss->news_id)->get();
        $count = 0;
        foreach($newscoms as $k=>$newscom)
        {
            if($newscom->com_id) {
                $datas[] = $newscom->com_id;
                $count = 1;
            }
        }
        if($count == 1) {
            $comments = Comment::whereIn('id', $datas)->orderBy('id','Desc')->take(10)->get();
            $say = count($comments);
        }else{
            $comments = null;
            $say = null;
        }


        return view('news',compact('newss','category','comments','say','ads', 'newis'));
    }
}
