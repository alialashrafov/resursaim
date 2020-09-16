<?php

namespace App\Http\Requests\Settings;

use Illuminate\Foundation\Http\FormRequest;

class Save extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
                'facebook' => ['required'],
                'twitter' => ['required'],
                'youtube' => ['required'],
                'google' => ['required'],
                'address' => ['required'],
                'email' => ['required'],
                'phone' => ['required'],
                'logo' => ['image', 'mimes:jpg,png,jpeg,gif'],
        ];

         foreach (config('laravellocalization.supportedLocales') as $code => $locale) {
             $rules['description_' . $code] = ['required', 'string', 'max: 255'];
         }
        return $rules;
    }
}
