@extends('diseño-base.plantilla-admin')
@section('seccion')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">ASIGNAR CARGO</h6>
    </div>

    <div class="d-flex justify-content-center h-100">
        <div class="card-body">
        <p class="text-center m-0 font-weight-bold text-primary">Asinar Cargo al personal de </p>
            <p>
            <h4 class="text-center m-0 font-weight-bold text-primary">
                MOSQUERA 
                <br> 
                ABOGADOS
            </h4>
            <p class="divider-text">
                <span class="bg-light"></span>
            </p>
            <form action="---" class="texto_campos" method="get">
            @csrf
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
                    </div>
                    <input id="cedula" readonly="readonly" type="" placeholder="* Cedula" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}" required autocomplete="cedula" autofocus>
                </div>
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                        <input id="nombre"  readonly="readonly" type="text" placeholder="* Nombre" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>
                </div>
            </form>  
            <form action="---" class="texto_campos" method="post">
                @csrf
                <div class="input-group form-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-sitemap"></i> </span>
                    </div>
                    <select name='nombre' id='nombre' class="form-control">
                        <option selected="">* Seleccionar el tipo de usuario</option>
                        <option value='Abogado Jefe'>Abogado Jefe</option>
                        <option value='Abogado Auxiliar'>Abogado Auxiliar</option>
                        <option value='Secretaria'>Secretaria</option>
                    </select>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-12 align-items-center">
                        <button type="submit" class="btn btn-secondary text-center ">
                            {{ __('Asignar cargo') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
