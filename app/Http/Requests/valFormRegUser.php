<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class valFormRegUser extends FormRequest
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
            'cedula' => 'required|max:60|digits_between:7,20',
            'nombre' => 'required|string|max:60',
            'telefono' => 'required|numeric|digits_between:7,20',
            'email' => "string|max:60|email|nullable",
            //'password' => 'required',
            //'password_confirmation' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cedula.digits_between' => 'La identificación del usuario debe estar entre 7 y 20 digitos.',
            'nombre.max' => 'El nombre debe ser menor a 60 dígitos.',
            'telefono.digits_between' => 'Por favor, ingrese un número de teléfono correcto.
                                El número de teléfono debe ser mayor a 7 dígitos y menor a 20 dígitos.',
            'telefono.numeric' => 'El teléfono debe ser un valor numérico.',
            'email.max' => 'El correo electrónico debe ser menor a 60 caracteres.',
            'email.email' => 'Por favor, ingrese un correo electrónico válido.'
        ];
    }


}
