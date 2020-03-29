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
            'abogadoPpal'=>'required',
            'cliente'=>'required|string|max:191',
            'contraparte'=>'required|string|max:191',
        ];
    }

    public function messages()
    {
        return [
            'radicado.max' => 'El número de radicado debe ser menor a 191 dígitos.',
            'estado.required' => 'El estado del caso es un campo obligatorio',
            'abogadoPpal.required' => 'El campo de Abogado Principal del caso es obligatorio',
            'fecha_inicio.required' => 'La fecha de inicio es un campo obligatorio',
            'fecha_inicio.date' => 'Formato de fecha de inicio incorrecto',
            'descripcion.max' => 'La descripción debe ser menor a 191 caracteres.',
            'cliente.max' => 'Los datos del cliente debe ser menor a 191 caracteres.',
            'cliente.max' => 'Los datos de la contraparte debe ser menor a 191 caracteres.'
        ];
    }
}
