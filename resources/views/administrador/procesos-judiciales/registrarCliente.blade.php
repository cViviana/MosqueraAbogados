@extends('diseño-base.perfil')

@section('registrarCliente')
    <div class="container_pagina">
        <div class="texto_titulo">REGISTRAR CLIENTE</div> 
        <div class="container_formulario">
            <div class="mascara">
            <form action="{{route('agregarCliente')}}" class="texto_campos" method="post">
            {{csrf_field()}}
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input name='nombre' id='nombre' class="form-control" placeholder="* Nombre Completo" type="text" required>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                    <select name='tipo' id='tipo' class="form-control">
                        <option selected="">* Seleccionar tipo de Persona</option>
                        <option value="natural">Persona Natural</option>
                        <option value="juridica">Persona Juridica</option>
                    </select>
                    <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                    <input name='numero' id='numero' class="form-control" placeholder="* Numero de Identificacion" type="text" required>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                    <input name='telefono' id='telefono' class="form-control" placeholder="* Numero de telefono" type="text" required>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input name='email' id='email' class="form-control" placeholder="* Correo Electronico" type="text" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Registrar Cliente</button>
                <div class="texto_campos">Los campos con (*) son obligatorios</div> 
            </form>
            </div>
        </div>
    </div>
@endsection
