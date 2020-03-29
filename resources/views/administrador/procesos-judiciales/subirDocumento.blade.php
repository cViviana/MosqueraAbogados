@extends('diseño-base.plantilla-registrar')
@section("resaltar-documentos-casos", "active")
@section("resaltar-subirDocumento", "active")

@section('titulo','Información de documentos')
@section('titulo-formulario', "SUBIR DOCUMENTOS")

@section('formulario')
<form action="{{route('guardarDocumento')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}
  <div class="row">
        <div class="col-md-6">
            <div class="form-group texto"> 
                IDENTIFICACIÓN DEL PROCESO
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
          <div class="form-group texto"> 
              <select class="form-control select2 select2-hidden-accessible" name='radicado_doc' id='radicado_doc' style="width: 100%;" tabindex="-1" aria-hidden="true" value= "{{ old('abogadoPpal') }}">
              <option disabled selected>* Radicado</option>
              @foreach ($ListaCasos as $caso)
              <option value= {{$caso->radicado}}>{{$caso->radicado}}</option>
              @endforeach
              </select> 
          </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group texto"> 
                UBICACIÓN DOCUMENTOS
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
          <div class="form-group texto"> 
              <select class="form-control select2 select2-hidden-accessible" name='ubicacion_id' id='ubicacion_id' style="width: 100%;" tabindex="-1" aria-hidden="true" value= "{{ old('abogadoPpal') }}">
                <option disabled selected>* Ubicación Física (Archivador - Gaveta) </option>
                @foreach ($ListaUbicaciones as $ubicacion)
                  <option value= {{$ubicacion->id}}>{{$ubicacion->numArchivero}} - {{$ubicacion->numGaveta}}</option>
                @endforeach
              </select> 
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
          <div class="form-group texto"> 
              TIPO DOCUMENTO
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
          <div class="form-group texto"> 
              <select class="form-control select2 select2-hidden-accessible" name='tipo_id' id='tipo_id' style="width: 100%;" tabindex="-1" aria-hidden="true" value= "{{ old('abogadoPpal') }}">
                <option disabled selected>* Tipo documento</option>
                @foreach ($ListaTipos as $tipo)
                  <option value= {{$tipo->id}}>{{$tipo->nombre}}</option>
                @endforeach
              </select> 
              <a class="vinculo" href="{{route('crearTipoDocumento')}}" title="Añadir tipo">Añadir nuevo tipo de documento</a>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
          <div class="form-group texto"> 
              DESCRIPCIÓN DOCUMENTO
          </div>
      </div>
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
