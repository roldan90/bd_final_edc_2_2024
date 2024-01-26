@extends('layouts/main')
@section('titulo', 'Proveedores')
@section('titulo_pagina', 'PROVEEDORES')
@section('contenido')
    <a href="{{ route('proveedor-create') }}" class="btn btn-primary">
        <i class="fa-solid fa-circle-plus"></i> Agregar nuevo proveedor
    </a>
    <hr>
    <table class="table table-dark table-striped table-sm" id="tabla-proveedores">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th class="text-center">Editar</th>
                <th class="text-center">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->codigo }}</td>
                    <td>{{ $item->paterno }}</td>
                    <td>{{ $item->materno }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>
                        <strong>Calle:</strong> {{ $item->calle }}
                        , <strong>Ciudad:</strong> {{ $item->ciudad }}
                        , <strong>Provincia:</strong> {{ $item->provincia }}
                        , <strong>CP:</strong> {{ $item->cp }}
                    </td>
                    <td class="text-center">
                        <a href="{{ route('proveedor-edit', $item->id) }}" class="btn btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('proveedor-show', $item->id) }}" class="btn btn-danger">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


    @push('scripts')
        <script src="{{ asset('js/proveedores.js') }}"></script>
        <script>
            // Obtener el mensaje de la sesión
            let mensaje = @json(session('mensaje'));
            if(mensaje != null){
                alertify.success(mensaje); 
            }
           
        </script>
    @endpush
@endsection