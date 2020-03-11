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
            'numero' => 'required|unique:cliente|max:191',
            'nombre' => 'required|string|max:60',
            'tipo'=> 'required|in:juridica,natural',
            //'tipo' => 'required|string|max:60',
            'telefono' => 'required|numeric|digits_between:7,20',
            'email' => 'required|unique:cliente|string|max:60'
        ];
    }

    public function messages()
    {
        return [
            'numero.unique' => 'El numero de identificacion ya existe',
            'numero.max' => 'El numero debe ser menor a 191 digitos',
            'nombre.max' => 'El nombre debe ser menor a 60 digitos',
            'tipo.in' => 'El tipo de persona debe ser entre JURIDICA y NATURAL ',
            'telefono.digits_between' => 'El numero de telefono debe ser mayor a 7 y menor a 20 digitos',
            'telefono.numeric' => 'El telefono debe ser un valor numerico',
            'email.unique' => 'Este correo electronico ya existe',
            'email.max' => 'El correo electronico debe ser menor a 60 caracteres'
        ];
    }

}
