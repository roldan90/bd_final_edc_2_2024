@extends('layouts/main')
@section('titulo', 'Actualizar producto')
@section('titulo_pagina', 'ACTUALIZAR PRODUCTO')
@section('contenido')
   <form action="{{ route('producto-update', $items->id) }}" method="post">
        @csrf
        @method('put')
        <div class="row">
            <div class="col">
                <label for="codigo_producto">Codigo de producto</label>
                <input type="text" name="codigo_producto" id="codigo_producto" class="form-control" value="{{ $items->codigo_producto }}" required>
            </div>
            <div class="col">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $items->nombre }}" required>
            </div>
            <div class="col">
                <label for="color">Color</label>
                <input type="text" name="color" id="color" class="form-control" value="{{ $items->color }}" required>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="precio">Precio</label>
                <input type="text" name="precio" id="precio" class="form-control" value="{{ $items->precio }}" required>
            </div>
            <div class="col">
                <label for="id_categoria">Categoria</label>
                <select name="id_categoria" id="id_categoria" class="form-select" required>
                    <option value="">Seleciona una categoria</option>
                    @foreach ($categorias as $categoria)
                        @if ($items->id_categoria == $categoria->id)
                            <option selected value="{{ $categoria->id }}">{{ $categoria->codigo . " || " . $categoria->nombre }}</option>
                        @endif
                        <option value="{{ $categoria->id }}">{{ $categoria->codigo . " || " . $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button class="btn btn-warning mt-3">
            Actualizar
        </button>
   </form>
@endsection