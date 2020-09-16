<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comment::all();

        return view('admin.comments.index',compact('comments'));
    }
    public function delete($id)
    {
        Comment::where('id',$id)->delete();
        return redirect()->back()
            ->with('mesajc', ('Uğurla silindi'))
            ->with('mesaj_tip', 'warning');
    }
}
