<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsComment extends Model
{
    protected $table = "news_comments";
    protected $guarded = [''];

    public function tonews()
    {
        $this->hasOne(Newz::class, 'id','news_id');
    }
}
