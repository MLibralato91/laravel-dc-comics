<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'description' => 'required|max:450',
            'thumb' => 'required',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required',
            'type' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'title.required' => "Il titolo è obbligatorio",
            'description.required' => 'Il campo è obbligatorio',
            'thumb.required' => "Devi inserire la url di un'immagine",
            'price.required' => 'Il campo è obbligatorio',
            'series.required' => 'Il campo è obbligatorio',
            'sale_date.required' => 'Il campo è obbligatorio',
            'type' => 'Il campo è obbligatorio'

        ];
    }
}
