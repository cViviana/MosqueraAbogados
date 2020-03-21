<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class valFormRegUbi extends FormRequest
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
            'numArchivero'=> 'required|numeric',
            'numGaveta'=> 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'numArchivero.unique' => 'Este número de archivero ya se encuentra registrado.',
            'numArchivero.numeric' => 'El número de archivero debe ser numérico.',
            'numGaveta.numeric' => 'El número de gaveta debe ser numérico.'
        ];
    }
}
