@extends('diseño-base.plantilla-base')

@section('registrar-proceso-judicial')
    <div class="container">
        <br>
        <h2>REGISTRAR PROCESO JUDICIAL</h2>
        <div class="form-group">
            <label for="">Radicado *</label>
            <input type="text" class="form-control">
            <label for="">Tipo de caso *</label>
            <input type="text" class="form-control">
            <label for="">Fecha de inicio *</label>
            <input type="text" class="form-control">
            <label for="">Ubicación *</label>
            <input type="text" class="form-control">
            <label for="">Estado *</label>
            <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Siguiente</button>
        <p>Los campos con (*) son obligatorios</p>
    </div>
@endsection