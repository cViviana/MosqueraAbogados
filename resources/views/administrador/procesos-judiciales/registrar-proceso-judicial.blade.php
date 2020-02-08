@extends('diseño-base.perfil')

@section('registrar-proceso-judicial')
    <div class="container_pagina">
        <div class="texto_titulo">REGISTRAR CASO</div> 
        <div class="container_formulario">
            <div class="mascara">
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-link"></i></span>
                    <input name="" class="form-control" placeholder="* Numero de Radicado" type="text" required>
                </div>
                <br>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-sitemap"></i></span>
                    <select class="form-control">
                        <option selected="">* Seleccionar tipo de Caso</option>
                        <option>Caso 1</option>
                        <option>Caso 2</option>
                        <option>Caso 3</option>
                    </select>
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
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                    <input name="" class="form-control" placeholder="* Ubicacion" type="text" required>
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

                <button type="submit" class="btn btn-primary">Siguiente</button>
                
                <div class="texto_campos">Los campos con (*) son obligatorios</div> 
            </div>
        </div>
    </div>
@endsection
