@extends('diseño-base.plantilla-registrar')
@section("resaltar-casos", "active")
@section("resaltar-listarCasos", "active")

@section('titulo','Procesos Judiciales')

@section('titulo-formulario', "ACTUALIZAR DATOS DEL PROCESO JUDICIAL")

@section('formulario')
    <form action="{{route('actualizarCaso')}}" class="texto_campos" method="post">
    {{csrf_field()}}
         <div class="row">
            <div class="col-md-6">
                <div class="form-group texto"> 
                    IDENTIFICACIÓN DEL PROCESO
                </div>
            </div>
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-link"></i></span>
            </div>
            <input name='radicado' id='radicado' readonly="readonly" class="form-control @error('radicado') is-invalid @enderror" placeholder="* Número de Radicado" type="text" required
                value = {{$caso->radicado}}>
            @error('radicado')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group texto"> 
                    <br>
                    ABOGADOS A CARGO
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group texto"> 
                    <select class="form-control select2 select2-hidden-accessible @error('abogadoPpal') is-invalid @enderror" name='abogadoPpal' id='abogadoPpal' style="width: 100%;" tabindex="-1" aria-hidden="true" value= "{{ old('abogadoPpal') }}">
                    <option disabled selected>* Abogado Principal</option>
                    <@foreach ($Usuarios as $us)
                        <option value= {{$us->cedula}}>{{$us->cedula}} - {{$us->nombre}}</option>
                    @endforeach
                    </select> 
                    @error('abogadoPpal')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group texto"> 
                    <select class="form-control select2 select2-hidden-accessible @error('abogadoAux') is-invalid @enderror" name='abogadoAux' id='abogadoAux'style="width: 100%;" tabindex="-1" aria-hidden="true" value= "{{ old('abogadoPpal') }}">
                        <option disabled selected>Abogado Auxiliar</option>
                        <@foreach ($Usuarios as $us)
                        <option value= {{$us->cedula}}>{{$us->cedula}} - {{$us->nombre}}</option>
                        @endforeach
                    </select> 
                    @error('abogadoAux')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group texto"> 
                    PARTES INVOLUCRADAS
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group texto"> 
                    <select class="form-control select2 select2-hidden-accessible @error('cliente') is-invalid @enderror"  name='cliente' id='cliente' style="width: 100%;" tabindex="-1" aria-hidden="true" value= "{{ old('abogadoPpal') }}">
                        <option disabled selected>* Cliente</option>
                        @foreach ($Clientes as $cli)
                        <option value= {{$cli->numero}}>{{$cli->numero}} - {{$cli->nombre}}</option>
                        @endforeach
                    </select> 
                    @error('cliente')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group texto"> 
                    <select class="form-control select2 select2-hidden-accessible @error('contraparte') is-invalid @enderror" name='contraparte' id='contraparte' style="width: 100%;" tabindex="-1" aria-hidden="true" value= "{{ old('abogadoPpal') }}">
                        <option disabled selected>* Contraparte</option>
                        @foreach ($Contraparte as $contr)
                        <option value= {{$contr->numero}}>{{$contr->numero}} - {{$contr->nombre}}</option>
                        @endforeach
                    </select> 
                    @error('contraparte')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group texto"> 
                    DATOS DEL PROCESO
                </div>
            </div>
        </div>
        
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-tasks"></i></span>
            </div>
            <select name='estado' id='estado' class="form-control @error('estado') is-invalid @enderror">
                <option selected="selected" value="{{$caso->estado}}" disabled selected>{{$caso->estado}}</option>
                <option >* Seleccionar el estado</option>
                <option value='activo'>Activo</option>
                <option value='cerrado'>Cerrado</option>
            </select>
            @error('estado')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-comments"></i></span>
            </div>
            <input name='descripcion' id='descripcion' class="form-control @error('descripcion') is-invalid @enderror" placeholder="* Descripción" type="text" required
                value = {{$caso->descripcion}}>
            @error('descripcion')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <br>
        <div class="input-group date" data-provide="datepicker">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
            <input type="text" name='fecha_inicio' id='fecha_inicio' class="form-control @error('fecha_inicio') is-invalid @enderror" readonly="readonly" placeholder="* Fecha de Inicio AAAA-MM-DD" value='{{$caso->fecha_inicio}}' required>
            @error('fecha_inicio')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <br>
        <div class="input-group date" data-provide="datepicker">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
            <input type="text" name='fecha_fin' id='fecha_fin' class="form-control @error('fecha_fin') is-invalid @enderror" placeholder="                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   Fecha de Finalización" value='{{$caso->fecha_fin}}'>
            @error('fecha_fin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Actualizar Caso</button>
        <div class="texto_campos">Los campos con (*) son obligatorios</div>
    </form>
@endsection
