@extends('diseño-base.plantilla-registrar')
@section("resaltar-documentos-casos", "active")
@section("resaltar-subirDocumento", "active")

@section('titulo','Subir documentos')

@section('titulo-formulario', "SUBIR DOCUMENTOS")

@section('formulario')
    <br>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-boxes"></i></span>
        </div>
        <select class="form-control">
            <option selected="">* Archivero</option>
            <option>Archivero 1</option>
            <option>Archivero 2</option>
        </select>
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-archive"></i></span>
        </div>
        <select class="form-control">
            <option selected="">* Gaveta</option>
            <option>Gaveta 1</option>
            <option>Gaveta 2</option>
        </select>
    </div>
    <br>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-project-diagram"></i></span>
        </div>
        <select class="form-control">
            <option selected="">* Tipo documento</option>
            <option>Tipo 1</option>
            <option>Tipo 2</option>
        </select>
    </div>
    <div class="vinculo">
        <a class="vinculo" href="****" title="Añadir tipo">Añadir nuevo tipo de documento</a>
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-comments"></i></span>
        </div>
        <input name="" class="form-control" placeholder="* Descripción" type="text" required>
    </div>
    <br>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label"   for="customFile">Seleccionar Documento</label>
    </div>
    <div>
    <br>
    </div>
    
    <button type="submit" class="btn btn-primary">Subir Documento</button>
    <div class="texto_campos">Los campos con (*) son obligatorios</div>
    <br>

    <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>
@endsection

