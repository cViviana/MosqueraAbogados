@extends('diseño-base.perfil')

@section('registrarCliente')
    <div class="container_pagina">
        <div class="texto_titulo">REGISTRAR CLIENTE</div> 
        <div class="container_formulario">
            <div class="mascara">
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input name="" class="form-control" placeholder="* Nombre Completo" type="text" required>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                    <select class="form-control">
                        <option selected="">* Seleccionar tipo de Persona</option>
                        <option>Persona Natural</option>
                        <option>Persona Juridica</option>
                    </select>
                    <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                    <input name="" class="form-control" placeholder="* Numero de Identificacion" type="text" required>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                    <input name="" class="form-control" placeholder="* Numero de telefono" type="text" required>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input name="" class="form-control" placeholder="* Correo Electronico" type="text" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Registrar Cliente</button>
                <div class="texto_campos">Los campos con (*) son obligatorios</div> 
            </div>
        </div>
    </div>
@endsection
