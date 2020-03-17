<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class valFormRegCaso extends FormRequest
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
            'radicado'=>'require|unique:caso,radicado|string|max:191',
            'tipo'=> 'require|in:activo,cerrado',
            'fecha_inicio'=> 'required|date|after:tomorrow',
            'fechaFinal' => 'after_or_equal:fecha_inicio',
            'descripcion'=>'require|unique:caso,radicado|string|max:191',
            'demandado'=>'require|unique:caso,demandado|string|max:191',
            'demandante'=>'require|unique:caso,demandante|string|max:191',
        ];
    }
}
