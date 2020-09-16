<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Support\Str;

class Setting extends Model implements TranslatableContract
{
    use Translatable;
    protected $table = 'settings';
    protected $fillable = ['facebook', 'twitter','youtube','google','address','email','phone','logo'];
    public $translatedAttributes = ['description'];
    public $translationModel = "App\\Models\\SettingTranslation";
    public $translationForeignKey = "setting_id";

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
            $this->translateOrNew($code)->description = $validated['description_' . $code];
        }
    }

    private function assignCommonFields($validated)
    {
        $this->facebook = $validated['facebook'];
        $this->twitter = $validated['twitter'];
        $this->youtube = $validated['youtube'];
        $this->google = $validated['google'];
        $this->address = $validated['address'];
        $this->email = $validated['email'];
        $this->phone = $validated['phone'];
        $this->facebook = $validated['facebook'];
    }

    private function uploadFile($validated)
    {
        if (!empty($validated['logo'])) {
            $img = $validated["logo"];
            $img_name = md5(time()) . '_' . Str::random(8) . "." . $img->getClientOriginalExtension();
            $img->move(public_path('images'), $img_name);
            $this->logo = $img_name;
        }
    }


}
