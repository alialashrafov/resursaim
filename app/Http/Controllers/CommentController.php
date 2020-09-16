<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\NewsCategory;
use App\Models\NewsComment;
use App\Models\Newz;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($nid)
    {

    }
    public function form(Request $request, $nid)
    {

        $validated = request()->validate([
           'name'=>'required',
           'email'=>'required',
           'site'=>'nullable',
           'message'=>'required'
        ]);


        $data = request()->only('name', 'email','site','message');
        $otherdata = Comment::create($data);
        NewsComment::create([
            'news_id' => $nid,
            'com_id' => $otherdata->id
        ]);


        return back();


    }
}
