<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class valFormRegCliente extends FormRequest
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
        return [
            'numero' => 'require|unique:cliente,numero|numeric|max:191',
            'nombre' => 'require|string|max:50',
            'tipo' => 'require|string|max:50',
            'telefono' => 'require|numeric|max:20',
            'email' => 'require|unique:cliente,numero|string|max:50'
        ];
    }
}
