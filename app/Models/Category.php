<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = "category";
    protected $fillable = ['sira'];
    public $translatedAttributes = ['name', 'slug'];
    public $translationModel = "App\\Models\\CategoryTranslation";
    public $translationForeignKey = "cat_id";



//    public function news(){
//        return $this->hasMany(NewsCategory::class, 'cat_id','id');
//    }

    public function createFromRequest(array $validated)
    {
        $this->assignTranslateableFields($validated);
        $this->assignCommonFields($validated);
        $this->save();
    }
    public function updateFromRequest(array $validated)
    {
        $this->assignTranslateableFields($validated);
        $this->assignCommonFields($validated);
        $this->update();
    }

    private function assignTranslateableFields($validated)
    {
        foreach (config('laravellocalization.supportedLocales') as $code => $locale) {
            $this->translateOrNew($code)->name = $validated['name_' . $code];
            $this->translateOrNew($code)->slug = Str::slug($validated["name_" . $code]);
        }
    }

    private function assignCommonFields($validated)
    {
        $this->sira = $validated['sira'];
    }

}
