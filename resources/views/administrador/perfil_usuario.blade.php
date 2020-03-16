@extends('diseño-base.perfil')
@section('perfil')
    <div class="container_pagina">
        <div class="container_formulario emp-profile">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-img">
                            <img src="../img/profile.png" alt=""/>
                        </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-12">
                        <div class="texto_titulo_perfil">
                            Bienvenido a tu perfil de usuario
                            <br>
                            MOSQUERA ABOGADOS
                            <br>
                            _____________
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 texto_perfil">

                        <div class="col-md-12">
                        </div>
                        <div class="col-md-12">
                            <div>
                                 Nombre: {{ Auth::user()->nombre }}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                Correo:{{ Auth::user()->email}}
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div>
                                Telefono:{{ Auth::user()->telefono}}
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection
