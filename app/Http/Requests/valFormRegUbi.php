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
            'numArchivero'=> 'required|unique:ubicacion_fisica|numeric',
            'numGabeta'=> 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'numArchivero.unique' => 'Este numero de archivero ya se encuentra registrado',
            'numArchivero.numeric' => 'El numero de archivero debe ser numerico',
            'numGabeta.numeric' => 'El numero de gavera debe ser numerico'
        ];
    }
}
