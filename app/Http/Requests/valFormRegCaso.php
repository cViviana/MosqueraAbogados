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
        $now = new \DateTime();
      
        return [
            'radicado'=>'required|string|max:191',
            'estado'=> 'required|in:activo,cerrado',
            'fecha_inicio'=> 'required|date',
            'descripcion'=>'required|string|max:191',
            'cliente'=>'required|string|max:191',
            'contraparte'=>'required|string|max:191',
        ];
    }

}
