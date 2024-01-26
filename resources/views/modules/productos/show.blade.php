@extends('layouts/main')
@section('titulo', 'Eliminar Productos')
@section('titulo_pagina', 'ELIMINAR PRODUCTO')
@section('contenido')
    <h4>¿Estas seguro de eliminar el siguiente registro?</h4>
    <br>
    <table class="table table-dark table-striped table-sm text-center" id="tabla-productos">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Color</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $item->codigo_producto }}</td>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->color }}</td>
                <td>{{ $item->precio }}</td>
            </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="col text-center">
            <form action="{{ route('producto-destroy', $item->id) }}" method="POST">
                @csrf
                @method('post')
                <button class="btn btn-outline-danger btn-lg mt-4">Eliminar producto</button>
            </form>
        </div>
    </div>
@endsection