<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;

class Create extends FormRequest
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
            'author' => ['required', 'string'],
            'img' => ['required', 'image'],
        ];

        foreach (config('laravellocalization.supportedLocales') as $code => $locale) {
            $rules['title_' . $code] = ['required', 'string', 'max: 255'];
            $rules['short_description_' . $code] = ['required', 'string', 'max: 255'];
            $rules['description_' . $code] = ['required', 'string', 'max: 255'];
        }
        return $rules;
    }
}
