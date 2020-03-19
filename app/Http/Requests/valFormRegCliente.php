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

    //las reglas implementadas en 'rules()' seran solo de manejo de sintaxis

    public function rules()
    {
        return [
            'numero' => 'required|max:60',
            'nombre' => 'required|string|max:60',
            'tipo'=> 'required|in:juridica,natural',
            'telefono' => 'required|numeric|digits_between:7,20',
            'email' => "string|max:60|email|nullable",
        ];
    }

    public function messages()
    {
        return [
            'numero.max' => 'El numero debe ser menor a 191 digitos.',
            'nombre.max' => 'El nombre debe ser menor a 60 digitos.',
            'tipo.in' => 'Por favor, seleccione el tipo de persona.
                            Debe ser persona JURÍDICA o persona NATURAL.',
            'telefono.digits_between' => 'Por favor, ingrese un numero de teléfono correcto.
                                El número de teléfono debe ser mayor a 7 dígitos y menor a 20 dígitos.',
            'telefono.numeric' => 'El teléfono debe ser un valor numérico.',
            'email.max' => 'El correo electrónico debe ser menor a 60 caracteres.',
            'email.email' => 'Por favor, ingrese un correo electrónico válido.'
        ];
    }

}
