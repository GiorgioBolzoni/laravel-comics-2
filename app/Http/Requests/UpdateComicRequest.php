<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumb' => 'required|url',
            'price' => 'required|numeric|min:0',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date_format:Y-m-d',
            'type' => 'required|string|max:255',
        ];
    }
    public function messages()
    {
        return [

            'title.required' => 'Il titolo è obbligatorio.',
            'title.string' => 'Il titolo deve essere una stringa.',
            'title.max' => 'Il titolo non può superare :max caratteri.',
            'description.string' => 'La descrizione deve essere una stringa.',
            'thumb.url' => 'L\'URL dell\'immagine non è valido.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'price.min' => 'Il prezzo non può essere inferiore a :min.',
            'series.required' => 'La serie è obbligatoria.',
            'series.string' => 'La serie deve essere una stringa.',
            'series.max' => 'La serie non può superare :max caratteri.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date_format' => 'Il formato della data di vendita non è valido. Utilizza il formato Y-m-d.',
            'type.required' => 'Il tipo è obbligatorio.',
            'type.string' => 'Il tipo deve essere una stringa.',
            'type.max' => 'Il tipo non può superare :max caratteri.',

        ];
    }
}
