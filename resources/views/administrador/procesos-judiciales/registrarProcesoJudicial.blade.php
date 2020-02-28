@extends('diseño-base.perfil')

@section('titulo','Registrar Proceso Judicial')
@section('registrar-proceso-judicial')

    <div class="container_pagina">
        <div class="texto_titulo">REGISTRAR CASO</div>
        <div class="container_pagina container_formulario">
            <div class="mascara">
            <form action="" class="texto_campos" method="post">
            {{csrf_field()}}
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-link"></i></span>
                    <input name='radicado' id='radicado' class="form-control" placeholder="* Numero de Radicado" type="text" required>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                      <select name='demandante' id='demandante' class="form-control">
                          <option selected="">* Cliente</option>
                          @foreach ($clientes as $cli)
                          <option value= {{$cli->numero}}>{{$cli->numero}} - {{$cli->nombre}}</option>
                           @endforeach
                      </select>
                    <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                    <select name='demandado' id='demandado' class="form-control">
                        <option selected="">* Contraparte</option>
                          @foreach ($clientes as $cli)
                          <option value= {{$cli->numero}}>{{$cli->numero}} - {{$cli->nombre}}</option>
                          @endforeach
                    </select>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-tasks"></i></span>
                    <select name='estado' id='estado' class="form-control">
                        <option selected="">* Seleccionar el estado</option>
                        <option>Estado 1</option>
                        <option>Estado 2</option>
                        <option>Estado 3</option>
                    </select>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                    <input name='descripcion' id='descripcion' class="form-control" placeholder="* Descripcion" type="text" required>
                </div>
                <br>
                <div class="input-group date" data-provide="datepicker">
                    <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                    <input type="text" name='fecha_inicio' id='fecha_inicio'class="form-control" placeholder="* Fecha de Inicio" required>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <br>
                <div class="input-group date" data-provide="datepicker">
                    <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                    <input type="text" name='fecha_fin' id='fecha_fin' class="form-control" placeholder="* Fecha de Finalización" required>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Registrar Caso</button>
                <div class="texto_campos">Los campos con (*) son obligatorios</div>
            </form>
            </div>
        </div>
    </div>
@endsection