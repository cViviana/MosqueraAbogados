<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class valFormTipoDoc extends FormRequest
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
            'nombre'=> 'required|unique:tipo_documento|string'
        ];
    }

    public function messages()
    {
        return [
            'nombre.unique' => 'Este tipo de documento ya existe'
        ];
    }
}
