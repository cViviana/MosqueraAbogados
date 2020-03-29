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
                    IDENTIFICACION DEL PROCESO
                </div>
            </div>
        </div>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-link"></i></span>
            </div>
            <input name='radicado' id='radicado' readonly="readonly" class="form-control" placeholder="* Numero de Radicado" type="text" required
                value = {{$caso->radicado}}>
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
                    <select class="form-control select2 select2-hidden-accessible" name='abogadoPpal' id='abogadoPpal' style="width: 100%;" tabindex="-1" aria-hidden="true" value= "{{ old('abogadoPpal') }}">
                    <option disabled selected>* Abogado Principal</option>
                    <option selected="" >* Abogado Principal</option>
                    <@foreach ($Usuarios as $us)
                        <option value= {{$us->cedula}}>{{$us->cedula}} - {{$us->nombre}}</option>
                    @endforeach
                    </select> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group texto"> 
                    <select class="form-control select2 select2-hidden-accessible" name='abogadoAux' id='abogadoAux'style="width: 100%;" tabindex="-1" aria-hidden="true" value= "{{ old('abogadoPpal') }}">
                        <option selected="">* Auxiliar 1</option>
                        <@foreach ($Usuarios as $us)
                        <option value= {{$us->cedula}}>{{$us->cedula}} - {{$us->nombre}}</option>
                        @endforeach
                    </select> 
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
                    <select class="form-control select2 select2-hidden-accessible"  name='cliente' id='cliente' style="width: 100%;" tabindex="-1" aria-hidden="true" value= "{{ old('abogadoPpal') }}">
                        <option selected="">* Cliente</option>
                        @foreach ($Clientes as $cli)
                        <option value= {{$cli->numero}}>{{$cli->numero}} - {{$cli->nombre}}</option>
                        @endforeach
                    </select> 
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group texto"> 
                    <select class="form-control select2 select2-hidden-accessible" name='contraparte' id='contraparte' style="width: 100%;" tabindex="-1" aria-hidden="true" value= "{{ old('abogadoPpal') }}">
                        <option selected="">* Contraparte</option>
                        @foreach ($Contraparte as $contr)
                        <option value= {{$contr->numero}}>{{$contr->numero}} - {{$contr->nombre}}</option>
                        @endforeach
                    </select> 
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
            <select name='estado' id='estado' class="form-control">
                <option selected="selected" value="{{$caso->estado}}">{{$caso->estado}}</option>
                <option >* Seleccionar el estado</option>
                <option value='activo'>Activo</option>
                <option value='cerrado'>Cerrado</option>
            </select>
        </div>
        <br>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-comments"></i></span>
            </div>
            <input name='descripcion' id='descripcion' class="form-control" placeholder="* Descripcion" type="text" required
                value = {{$caso->descripcion}}>
        </div>
        <br>
        <div class="input-group date" data-provide="datepicker">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
            <input type="text" name='fecha_inicio' id='fecha_inicio'class="form-control" placeholder="* Fecha de Inicio AAAA-MM-DD" value='{{$caso->fecha_inicio}}' required>
        </div>
        <br>
        <div class="input-group date" data-provide="datepicker">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
            <input type="text" name='fecha_fin' id='fecha_fin' class="form-control" placeholder="* Fecha de Finalización" value='{{$caso->fecha_fin}}'>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Actualizar Caso</button>
        <div class="texto_campos">Los campos con (*) son obligatorios</div>
    </form>
@endsection
