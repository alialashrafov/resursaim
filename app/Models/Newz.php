<?php

namespace App\Models;

use App\Http\Requests\News\Create;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Support\Str;

class Newz extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = "news";
    protected $fillable = ['author', 'img'];
    public $translatedAttributes = ['title', 'short_description', 'description', 'slug'];
    public $translationModel = "App\\Models\\NewzTranslation";
    public $translationForeignKey = "news_id";

    public function comments()
    {
        return $this->hasMany(NewsComment::class, 'news_id', 'id');
    }

    public function category()
    {
        return $this->hasMany(NewsCategory::class, 'news_id', 'id');
    }

    public function createFromRequest(array $validated)
    {
        $this->assignTranslateableFields($validated);
        $this->assignCommonFields($validated);
        $this->uploadFile($validated);
        $this->save();
    }
    public function updateFromRequest(array $validated)
    {
        $this->assignTranslateableFields($validated);
        $this->assignCommonFields($validated);
        $this->uploadFile($validated);
        $this->update();
    }

    private function assignTranslateableFields($validated)
    {
        foreach (config('laravellocalization.supportedLocales') as $code => $locale) {
            $this->translateOrNew($code)->title = $validated['title_' . $code];
            $this->translateOrNew($code)->short_description = $validated['short_description_' . $code];
            $this->translateOrNew($code)->description = $validated['description_' . $code];
            $this->translateOrNew($code)->slug = Str::slug($validated["title_" . $code]);
        }
    }

    private function assignCommonFields($validated)
    {
        $this->author = $validated['author'];
    }

    private function uploadFile($validated)
    {
        if (!empty($validated['img'])) {
        $img = $validated['img'];
        $img_name = md5(time()) . '_' . Str::random(8) . "." . $img->getClientOriginalExtension();
        $img->move(public_path('images'), $img_name);
        $this->img = $img_name;
    }
    }

}
