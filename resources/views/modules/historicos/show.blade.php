@extends('layouts/main')
@section('titulo', 'Eliminar historico')
@section('titulo_pagina', 'ELIMINAR HISTORICO')
@section('contenido')
 
    <table class="table table-dark table-striped table-sm text-center" id="tabla-historico">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>Producto</th>
                <th>Proveedor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $items->fecha_entrega }}</td>
                <td>{{ $items->cantidad }}</td>
                <td>{{ $items->codigo_producto. " - " .$items->nombre_producto }}</td>
                <td>
                    {{ $items->paterno ." ". $items->materno ." ". $items->nombre_proveedor }}
                </td>
            </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="col text-center">
            <form action="{{ route('historico-destroy', $items->id) }}" method="POST">
                @csrf
                @method('post')
                <button class="btn btn-outline-danger btn-lg mt-4">Eliminar producto</button>
            </form>
        </div>
    </div>
@endsection