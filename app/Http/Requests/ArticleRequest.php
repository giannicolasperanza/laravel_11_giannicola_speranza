<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
       return [
            'title'=>'required',
            'text_article'=>'required',
            'img'=>'image',
            

        ];
    }


    public function messages(){
        return [
            'title.required'=>'Il titolo è obbligatorio',
            'text_article.required'=>'La descrizione è obbligatoria',
            // 'img.required'=>'L\'immagine è obbligatoria',
            'img.image'=>'Il file deve essere una immagine'


            
        ];
    }
}
