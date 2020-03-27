@extends('diseño-base.plantilla-registrar')
@section("resaltar-usuarios", "active")
@section("resaltar-listarUsuarios", "active")

@section('titulo','Información de Usuarios')
@section('titulo-formulario', "ASIGNAR CARGO")

@section('formulario')
    <p class="text-center m-0 font-weight-bold text-primary">Asignar Cargo al personal de </p>
    <p>
    <h4 class="text-center m-0 font-weight-bold text-primary">
        MOSQUERA 
        <br> 
        ABOGADOS
    </h4>
    <p class="divider-text">
        <span class="bg-light"></span>
    </p>
    <form method="POST" action="{{route('asignarRol')}}">
    @csrf
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
            </div>
            <input id="cedula" readonly="readonly" type="" placeholder="* Cedula" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ $User->cedula }}" required autocomplete="cedula" autofocus>
        </div>
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
                <input id="nombre"  readonly="readonly" type="text" placeholder="* Nombre" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ $User->nombre }}" required autocomplete="nombre" autofocus>
        </div>
        <div class="input-group form-group">
            <div class="input-group-prepend">
                <span class="input-group-text"> <i class="fa fa-sitemap"></i> </span>
            </div>
            <select name='rol' id='rol' class="form-control">
                <option selected="">* Seleccionar el tipo de usuario</option>
                <option value='Abogado jefe'>Abogado Jefe</option>
                <option value='Abogado auxiliar'>Abogado Auxiliar</option>
                <option value='Secretaria'>Secretaria</option>
            </select>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-12 align-items-center">
                <button type="submit" class="btn btn-primary text-center ">
                    {{ __('Asignar cargo') }}
                </button>
            </div>
        </div>
    </form>
@endsection