<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\EnseignantFormRequest;

class EnseignantFormRequest extends FormRequest
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
            'code' => [
                'required',
                'max:255'
            ],
            'nom' => [
                'required',
                'max:255'
            ],
            'prenom' => [
                'required',
                'max:255'
            ],
            'email' => [
                'required',
                'max:255',
                'email'
            ],
            
            'adresse' => [
                'required',
                'max:255'
            ]
        ];
    }
}
