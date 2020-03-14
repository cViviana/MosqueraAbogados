@extends('layouts.app')
@section('content')
<div class="body_login">
<div class="container_login">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header texto_prueba">
                <h3>ROLES</h3>
                <h3>Mosquera Abogados</h3>
            </div>    
            <div class="card_login">
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
                    
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
@endsection
