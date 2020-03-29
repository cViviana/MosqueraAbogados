@extends('diseño-base.plantilla-registrar')
@section("resaltar-contrapartes", "active")
@section("resaltar-listarContrapartes", "active")

@section('titulo','Información de Contraparte')
@section('titulo-formulario', "ACTUALIZAR DATOS DE CONTRAPARTE")

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
            <input name='nombre' id='nombre' class="form-control @error('nombre') is-invalid @enderror" placeholder="* Nombre Completo" type="text" required
            value="{{$Cliente->nombre}}" required autocomplete="nombre" autofocus>
            @error('nombre')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-list"></i></span>
            </div>
            <select name='tipo' id='tipo' class="form-control @error('tipo') is-invalid @enderror">
                <option selected="selected" value="{{$Cliente->tipo}}" >Persona {{$Cliente->tipo}}</option>
                <option value="natural">Persona Natural</option>
                <option value="juridica">Persona Juridica</option>
            </select>
            @error('tipo')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-id-card"></i></span>
            </div>
            <input name='numero' id='numero' readonly="readonly" class="form-control @error('numero') is-invalid @enderror" placeholder="* Numero de Identificacion" type="text" required
                value="{{$Cliente->numero}}">
            @error('numero')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-phone-square"></i></span>
            </div>
            <input name='telefono' id='telefono' class="form-control @error('telefono') is-invalid @enderror" placeholder="* Número de teléfono" type="text" required
                value="{{$Cliente->telefono}}">
            @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>
            <input name='email' id='email' class="form-control @error('email') is-invalid @enderror" placeholder="Correo Electrónico" type="text"
                value="{{$Cliente->email}}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <input type="hidden" name="roll" id='roll' value="contraparte">
        <br>
        <button type="submit" class="btn btn-primary">Actualizar Datos</button>
        <div class="texto_campos">Los campos con (*) son obligatorios</div>
    </form>
@endsection
