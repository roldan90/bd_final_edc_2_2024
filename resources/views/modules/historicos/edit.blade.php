@extends('layouts/main')
@section('titulo', 'Actualizar Historico')
@section('titulo_pagina', 'ACTUALIZAR HISTORICO')
@section('contenido')
    <form action="{{ route('historico-update', $historico->id) }}" method="POST">
        @csrf
        @method('put')
        <label for="fecha_entrega">Fecha Entrega</label>
        <input type="date" name="fecha_entrega" id="fecha_entrega" class="form-control" value="{{ $historico->fecha_entrega }}">
        <label for="cantidad">Cantidad</label>
        <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{ $historico->cantidad }}">
        <label for="id_producto">Producto</label>
        <select name="id_producto" id="id_producto" class="form-select">
            <option value="">Selecciona un producto</option>
            @foreach ($productos as $item)
                @if ($historico->id_producto == $item->id)
                    <option selected value="{{ $item->id }}"> 
                        {{ $item->codigo_producto . " - " . $item->nombre }} 
                    </option>
                @endif
                    <option value="{{ $item->id }}">{{ $item->codigo_producto . " - " . $item->nombre }}</option>
            @endforeach
        </select>
        <label for="id_proveedor">Proveedor</label>
        <select name="id_proveedor" id="id_proveedor" class="form-select">
            <option value="">Selecciona un proveedor</option>
            @foreach ($proveedores as $item)
                @if ($historico->id_proveedor == $item->id)
                    <option selected value="{{ $item->id }}">{{ $item->paterno . " " . $item->materno . " " . $item->nombre}}</option>
                @endif
                    <option value="{{ $item->id }}">{{ $item->paterno . " " . $item->materno . " " . $item->nombre}}</option>
            @endforeach
        </select>
        <button class="btn btn-warning mt-4">Actualizar historico</button>
    </form>
@endsection