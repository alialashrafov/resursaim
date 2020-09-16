<?php

namespace App\Http\Requests\Category;

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
            'sira' => ['required', 'integer'],
        ];

        foreach (config('laravellocalization.supportedLocales') as $code => $locale) {
            $rules['name_' . $code] = ['required', 'string', 'max: 255'];
        }
        return $rules;
    }
}
