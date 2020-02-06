@extends('diseño-base.plantilla-base')

@section('registrar-proceso-judicial')
    <div class="container">
    <form>
        <div class="titulo_menu">
            <h2>REGISTRAR CONTRAPARTE</h2>
        </div>
        
        <div class="form-group ">
            
            <label for="">Nombre *</label>
            <div class="input-group form-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="* Nombre Completo" type="text" required>
            </div>
            
            <label for="">Documento de identificacion *</label>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fas fa-address-card"></i> </span>
                </div>
                <select class="select" style="max-width: 120px;">
                    <option value="1">Cedula de ciudadania</option>
                    <option value="2">Tarjeta de identidad</option>
                    <option value="2">NIT</option>
                </select>
                <input name="" class="form-control" placeholder="* Numero de identificacion" type="text" required>
            </div>

            <label for="">Direccion de correo electronico *</label>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                </div>
                <input name="" class="form-control" placeholder="* Correo Electronico" type="email" required>
            </div>

            <label for="">Telefono *</label>
            <div class="form-group input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                </div>
                <select class="select" style="max-width: 120px;">
                    <option value="1">+57</option>
                </select>
                <input name="" class="form-control" placeholder="* Numero de telefono" type="text" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Siguiente</button>
    </form>   
        <p>Los campos con (*) son obligatorios</p>
    </div>
@endsection