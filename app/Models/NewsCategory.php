<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewsCategory extends Model
{
    protected $table = "news_category";
    protected $guarded = [''];

    public function news()
    {
        return $this->hasOne(Newz::class,'id','news_id');
    }
    public function categorys()
    {
        return $this->hasOne(Category::class,'id','cat_id');
    }
    public function newss()
    {
        return $this->hasMany(Newz::class,'id','news_id');
    }
}
