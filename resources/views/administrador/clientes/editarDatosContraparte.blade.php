@extends('diseño-base.plantilla-registrar')
@section("resaltar-contrapartes", "active")
@section("resaltar-listarContrapartes", "active")

@section('titulo','Actualizar datos de un cliente')

@section('titulo-formulario', "ACTUALIZAR DATOS DEL CONTRAPARTE")

@section("contenedor-mensajes")
    @if (session()->has('mensajeNoActualizacion'))
        <div class="alert alert-danger animated fadeIn">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{session('mensajeNoActualizacion')}}
        </div>
    @endif
@endsection 

@section('formulario')
    <form action="{{route('actualizarCliente')}}" class="texto_campos" method="post">
    {{csrf_field()}}
        <br>
        <div class="input-group">
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">
                <i class="fa fa-user"></i>
                </span>
            </div>
            <input name='nombre' id='nombre' class="form-control" placeholder="* Nombre Completo" type="text" required
            value="{{$Cliente->nombre}}" required autocomplete="nombre" autofocus >
        </div>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-list"></i></span>
            </div>
            <select name='tipo' id='tipo' class="form-control">
                <option selected="selected" value="{{$Cliente->tipo}}">Persona {{$Cliente->tipo}}</option>
                <option value="natural">Persona Natural</option>
                <option value="juridica">Persona Juridica</option>
            </select>
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-id-card"></i></span>
            </div>
            <input name='numero' id='numero' readonly="readonly" class="form-control" placeholder="* Numero de Identificacion" type="text" required
                value="{{$Cliente->numero}}">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-phone-square"></i></span>
            </div>
            <input name='telefono' id='telefono' class="form-control" placeholder="* Numero de telefono" type="text" required
                value="{{$Cliente->telefono}}">
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>
            <input name='email' id='email' class="form-control" placeholder="Correo Electronico" type="text"
                value="{{$Cliente->email}}">
        </div>
        <input type="hidden" name="roll" id='roll' value="contraparte">
        <br>
        <button type="submit" class="btn btn-primary">Actualizar Datos</button>
        <div class="texto_campos">Los campos con (*) son obligatorios</div>
    </form>
@endsection
