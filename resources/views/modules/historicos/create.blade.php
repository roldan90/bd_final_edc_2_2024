@extends('layouts/main')
@section('titulo', 'Agregar Historico')
@section('titulo_pagina', 'AGREGAR NUEVO HISTORICO')
@section('contenido')
    <form action="{{ route('historico-store') }}" method="POST">
        @csrf
        @method('post')
        <label for="fecha_entrega">Fecha Entrega</label>
        <input type="date" name="fecha_entrega" id="fecha_entrega" class="form-control">
        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" id="cantidad" class="form-control">
        <label for="id_producto">Producto</label>
        <select name="id_producto" id="id_producto" class="form-select">
            <option value="">Selecciona un producto</option>
            @foreach ($productos as $item)
                <option value="{{ $item->id }}">{{ $item->codigo_producto . " - " . $item->nombre }}</option>
            @endforeach
        </select>
        <label for="id_proveedor">Proveedor</label>
        <select name="id_proveedor" id="id_proveedor" class="form-select">
            <option value="">Selecciona un proveedor</option>
            @foreach ($proveedores as $item)
                <option value="{{ $item->id }}">{{ $item->paterno . " " . $item->materno . " " . $item->nombre}}</option>
            @endforeach
        </select>
        <button class="btn btn-primary mt-4">Agregar historico</button>
    </form>
@endsection