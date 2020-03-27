@extends('diseño-base.plantilla-registrar')
@section("resaltar-documentos-casos", "active")
@section("resaltar-listarDocumentos", "active")

@section('titulo','Actualizar datos documento')

@section('titulo-formulario', "Editar Documento")
@section('formulario')
<form action="{{route('actualizarDocumento')}}" class="texto_campos" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <br>
    <div class="input-group">
      <input type="hidden" id="id" name="id" value={{$id}}>
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-boxes"></i></span>
        </div>
        <select name='radicado_doc' id='radicado_doc' class="form-control">
          <option selected="">* Radicado</option>
          @foreach ($ListaCasos as $caso)
            <option value= {{$caso->radicado}}>{{$caso->radicado}}</option>
          @endforeach
        </select>
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-archive"></i></span>
        </div>
        <select name='ubicacion_id' id='ubicacion_id'class="form-control">
            <option selected="">* Ubicación Física (Archivador - Gaveta) </option>
            @foreach ($ListaUbicaciones as $ubicacion)
              <option value= {{$ubicacion->id}}>{{$ubicacion->numArchivero}} - {{$ubicacion->numGaveta}}</option>
            @endforeach
        </select>
    </div>
    <br>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-project-diagram"></i></span>
        </div>
        <select name='tipo_id' id='tipo_id' class="form-control">
            <option selected="">* Tipo documento</option>
            @foreach ($ListaTipos as $tipo)
              <option value= {{$tipo->id}}>{{$tipo->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="vinculo">
        <a class="vinculo" href="****" title="Añadir tipo">Añadir nuevo tipo de documento</a>
    </div>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-comments"></i></span>
        </div>
        <input name="descripcion" id="descripcion" class="form-control" placeholder="* Descripción" type="text" required>
    </div>
    <br>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text"><i class="far fa-file"></i></span>
      </div>
      <div class="custom-file">
        <input type="file" class="form-control custom-file-input" id="file" name="file" required>
        <label class="custom-file-label" for="file">Seleccionar Documento</label>
      </div>
    </div>

    <button type="submit" class="btn btn-primary">Subir Documento</button>
    <div class="texto_campos">Los campos con (*) son obligatorios</div>
    <br>
    <input type="hidden" name="path" id='path' value="">
</form>
@endsection
