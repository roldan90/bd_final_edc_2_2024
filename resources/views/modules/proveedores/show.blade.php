@extends('layouts/main')
@section('titulo', 'Actualizar proveedor')
@section('titulo_pagina', 'ACTUALIZAR PROVEEDOR')
@section('contenido')
    <h4>¿Estas seguro de eliminar el siguiente registro?</h4>
    <br>
    <table class="table table-dark table-striped table-sm text-center" id="tabla-proveedores">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Nombre</th>
                <th>Dirección</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{ $proveedor->codigo }}</td>
                    <td>{{ $proveedor->paterno }}</td>
                    <td>{{ $proveedor->materno }}</td>
                    <td>{{ $proveedor->nombre }}</td>
                    <td>
                        <strong>Calle:</strong> {{ $direccion->calle }}
                        , <strong>Ciudad:</strong> {{ $direccion->ciudad }}
                        , <strong>Provincia:</strong> {{ $direccion->provincia }}
                        , <strong>CP:</strong> {{ $direccion->cp }}
                    </td>
                </tr>
        </tbody>
    </table>
    <div class="row">
        <div class="col text-center">
            <form action="{{ route('proveedor-destroy', $proveedor->id) }}" method="POST">
                @csrf
                @method('post')
                <button class="btn btn-outline-danger btn-lg mt-4">Eliminar producto</button>
            </form>
        </div>
    </div>
   
@endsection