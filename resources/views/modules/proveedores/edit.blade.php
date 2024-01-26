@extends('layouts/main')
@section('titulo', 'Actualizar Proveedor')
@section('titulo_pagina', 'ACTUALIZAR PROVEEDOR')
@section('contenido')
    <form action="{{ route('proveedor-update', $proveedor->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="row">
            <div class="col">
                <label for="codigo">Codigo</label>
                <input type="text" name="codigo" id="codigo" class="form-control" value="{{ $proveedor->codigo }}">
            </div>
            <div class="col">
                <label for="paterno">Apellido paterno</label>
                <input type="text" name="paterno" id="paterno" class="form-control" value="{{ $proveedor->paterno }}">
            </div>
            <div class="col">
                <label for="materno">Apellido materno</label>
                <input type="text" name="materno" id="materno" class="form-control" value="{{ $proveedor->materno }}">
            </div>
            <div class="col">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $proveedor->nombre }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="calle">Calle</label>
                <input type="text" name="calle" id="calle" class="form-control" value="{{ $direccion->calle }}">
            </div>
            <div class="col">
                <label for="ciudad">Ciudad</label>
                <input type="text" name="ciudad" id="ciudad" class="form-control" value="{{ $direccion->ciudad }}">
            </div>
            <div class="col">
                <label for="provincia">Provincia</label>
                <input type="text" name="provincia" id="provincia" class="form-control" value="{{ $direccion->provincia }}">
            </div>
            <div class="col">
                <label for="cp">Codigo postal</label>
                <input type="text" name="cp" id="cp" class="form-control" value="{{ $direccion->cp }}">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-warning mt-4">Actualizar proveedor</button>
            </div>
        </div>
    </form>
@endsection