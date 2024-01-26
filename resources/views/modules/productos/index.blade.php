@extends('layouts/main')
@section('titulo', 'Productos')
@section('titulo_pagina', 'PRODUCTOS')
@section('contenido')
    <a href="{{ route('producto-create') }}" class="btn btn-primary">
        <i class="fa-solid fa-circle-plus"></i> Agregar nuevo producto
    </a>
    <hr>
    <table class="table table-dark table-striped table-sm" id="tabla-productos">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Categoria</th>
                <th>Codigo categoria</th>
                <th>Nombre</th>
                <th>Color</th>
                <th>Precio</th>
                <th class="text-center">Editar</th>
                <th class="text-center">Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->codigo_producto }}</td>
                    <td>{{ $item->nombre_categoria }}</td>
                    <td>{{ $item->codigo_categoria }}</td>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->color }}</td>
                    <td>{{ $item->precio }}</td>
                    <td class="text-center">
                        <a href="{{ route('producto-edit', $item->id) }}" class="btn btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('producto-show', $item) }}" class="btn btn-danger">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @push('scripts')
        <script src="{{ asset('js/productos.js') }}"></script>
        <script>
            // Obtener el mensaje de la sesión
            let mensaje = @json(session('mensaje'));
            if(mensaje != null){
                alertify.success(mensaje); 
            }
           
        </script>
    @endpush
@endsection