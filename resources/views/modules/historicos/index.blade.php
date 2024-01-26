@extends('layouts/main')
@section('titulo', 'Historicos')
@section('titulo_pagina', 'HISTORICOS')
@section('contenido')
    <a href="{{ route('historico-create') }}" class="btn btn-primary">
        <i class="fa-solid fa-circle-plus"></i> Agregar nuevo control
    </a>
    <hr>
    <table class="table table-dark table-striped table-sm" id="tabla-historico">
        <thead>
            <tr>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>Producto</th>
                <th>Proveedor</th>
                <th class="text-center">Editar</th>
                <th class="text-center">Eliminar</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($items as $item)
                <tr>
                    <td>{{ $item->fecha_entrega }}</td>
                    <td>{{ $item->cantidad }}</td>
                    <td>{{ $item->codigo_producto. " - " .$item->nombre_producto }}</td>
                    <td>
                        {{ $item->paterno ." ". $item->materno ." ". $item->nombre_proveedor }}
                    </td>
                    <td class="text-center">
                        <a href="{{ route('historico-edit', $item->id) }}" class="btn btn-warning">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('historico-show', $item->id) }}" class="btn btn-danger">
                            <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </td>
                </tr>
           @endforeach
        </tbody>
    </table>

    @push('scripts')
        <script src="{{ asset('js/historico.js') }}"></script>
    @endpush
@endsection