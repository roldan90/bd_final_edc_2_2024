@extends('layouts/main')
@section('titulo', 'Nuevo producto')
@section('titulo_pagina', 'AGREGAR NUEVO PRODUCTO')
@section('contenido')
   <form action="{{ route("producto-store") }}" method="post">  
        @csrf
        @method('post')
        <div class="row">
            <div class="col">
                <label for="codigo_producto">Codigo de producto</label>
                <input type="text" name="codigo_producto" id="codigo_producto" class="form-control" required>
            </div>
            <div class="col">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="col">
                <label for="color">Color</label>
                <input type="text" name="color" id="color" class="form-control" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="precio">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control" required>
            </div>
            <div class="col">
                <label for="id_categoria">Categoria</label>
                <select name="id_categoria" id="id_categoria" class="form-select" required>
                    <option value="">Selecciona una categoria</option>
                    @foreach ($items as $item)
                        <option value="{{ $item->id }}">{{ $item->codigo. " || " . $item->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-primary mt-4">
            Guardar
        </button>
   </form>
@endsection