@extends('diseño-base.perfil')
@section('titulo','Actualizar datos de un cliente')

@section('CRUD-datos-cliente')

    @if(count($errors) > 0)
        <div class="alert alert-danger" role="alert">
            <ul>
            @foreach($errors->all() as $error)
                <li> {{$error}} </li>
            @endforeach
            </ul>
        </div>
    @endif

    <div class="container_pagina">
        <div class="texto_titulo">ACTUALIZAR DATOS DEL CLIENTE</div> 
        <div class="container_formulario">
            <div class="mascara">
            <form action="{{route('actualizarCliente')}}" class="texto_campos" method="post">
            {{csrf_field()}}
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                    <input name='nombre' id='nombre' class="form-control" placeholder="* Nombre Completo" type="text" required
                        value="{{$Cliente->nombre}}">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-list"></i></span>
                    <select name='tipo' id='tipo' class="form-control" value="{{$Cliente->tipo}}">
                        <option selected="">* Seleccionar tipo de Persona</option>
                        <option value="natural">Persona Natural</option>
                        <option value="juridica">Persona Juridica</option>
                    </select>
                    <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                    <input name='numero' id='numero' class="form-control" placeholder="* Numero de Identificacion" type="text" required
                        value="{{$Cliente->numero}}">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone-square"></i></span>
                    <input name='telefono' id='telefono' class="form-control" placeholder="* Numero de telefono" type="text" required
                        value="{{$Cliente->telefono}}">
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input name='email' id='email' class="form-control" placeholder="* Correo Electronico" type="text" required
                        value="{{$Cliente->email}}">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Actualizar Datos</button>
                <div class="texto_campos">Los campos con (*) son obligatorios</div> 
            </form>
            </div>
        </div>
    </div>
@endsection