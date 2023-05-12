<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ComicRequest extends FormRequest{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */     
    public function authorize() {
        return true;    
    }

    public function rules() {
    return [
        'title'=> 'required|max:20',
        'description'=> 'nullable',
        'thumb'=>'nullable|url|endswith:jpeg,png,webp',
        'price'=>'nullable|required',
        'series'=>'nullable|max:255',
        'sale_date'=> 'required|dateTime'
    ];
    }

    public function messages()
    {

        return [
            'title'=>'Il titolo è un campo obbligatorio.',
            'price'=>'Il prezzo è un campo obbligatorio.',
            'sale_date'=>'La data d\'uscita è un campo obbligatorio.'
        ];
    }
    

}
