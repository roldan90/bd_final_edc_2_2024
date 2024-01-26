@extends('layouts/main')
@section('titulo', 'Agregar Proveedores')
@section('titulo_pagina', 'AGREGAR NUEVO PROVEEDOR')
@section('contenido')
    <form action="{{ route('proveedor-store') }}" method="POST">
        @csrf
        @method('post')
        <div class="row">
            <div class="col">
                <label for="codigo">Codigo</label>
                <input type="text" name="codigo" id="codigo" class="form-control" required>
            </div>
            <div class="col">
                <label for="paterno">Apellido paterno</label>
                <input type="text" name="paterno" id="paterno" class="form-control" required>
            </div>
            <div class="col">
                <label for="materno">Apellido materno</label>
                <input type="text" name="materno" id="materno" class="form-control" required>
            </div>
            <div class="col">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="calle">Calle</label>
                <input type="text" name="calle" id="calle" class="form-control" required>
            </div>
            <div class="col">
                <label for="ciudad">Ciudad</label>
                <input type="text" name="ciudad" id="ciudad" class="form-control" required>
            </div>
            <div class="col">
                <label for="provincia">Provincia</label>
                <input type="text" name="provincia" id="provincia" class="form-control" required>
            </div>
            <div class="col">
                <label for="cp">Codigo postal</label>
                <input type="text" name="cp" id="cp" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-primary mt-4">Agregar proveedor</button>
            </div>
        </div>
    </form>
@endsection