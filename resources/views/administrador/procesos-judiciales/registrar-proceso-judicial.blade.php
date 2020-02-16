@extends('diseño-base.perfil')
@section('registrar-proceso-judicial')
    <div class="container_pagina">
        <div class="texto_titulo">REGISTRAR CASO</div> 
        <div class="container_pagina container_formulario">
            <div class="mascara">
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-link"></i></span>
                    <input name="" class="form-control" placeholder="* Numero de Radicado" type="text" required>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                    <select class="form-control">
                        <option selected="">* Cliente</option>
                        <option>Cliente 1</option>
                        <option>Cliente 2</option>
                    </select>
                    <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>
                    <select class="form-control">
                        <option selected="">* Contraparte</option>
                        <option>Contraparte 1</option>
                        <option>Contraparte 2</option>
                    </select>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-tasks"></i></span>
                    <select class="form-control">
                        <option selected="">* Seleccionar el estado</option>
                        <option>Estado 1</option>
                        <option>Estado 2</option>
                        <option>Estado 3</option>
                    </select>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-comments"></i></span>
                    <input name="" class="form-control" placeholder="* Descripcion" type="text" required>
                </div>
                <br>
                <div class="input-group date" data-provide="datepicker">
                    <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                    <input type="text" class="form-control" placeholder="* Fecha de Inicio" required>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <br>
                <div class="input-group date" data-provide="datepicker">
                    <span class="input-group-addon"><i class="fa fa-calendar-check-o"></i></span>
                    <input type="text" class="form-control" placeholder="* Fecha de Finalización" required>
                    <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                    </div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Registrar Caso</button>
                <div class="texto_campos">Los campos con (*) son obligatorios</div> 
            </div>
        </div>
    </div>
@endsection