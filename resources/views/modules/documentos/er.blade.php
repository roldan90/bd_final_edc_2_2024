@extends('layouts/main')
@section('titulo', 'Entidad relacion')
@section('titulo_pagina', 'DIAGRAMA ENTIDAD RELACION Y RELACIONAL')
@section('contenido')
    <div class="text-center">
        <img src="{{ asset('img/er.png') }}" class="img-fluid" alt="">
    </div>
    <hr>
    <div class="text-center">
        <h3>Modelo Relacional Normalizado</h3>
        <img src="{{ asset('img/modelo-er-3.png') }}" class="img-fluid" alt="">
    </div>
@endsection