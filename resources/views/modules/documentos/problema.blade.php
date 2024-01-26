@extends('layouts/main')
@section('titulo', 'Problema Resuelto')
@section('titulo_pagina', 'PROBLEMA RESUELTO')
@section('contenido')
    <h3>Proveedores</h3>
    <p>Tenemos que diseñar una base de datos sobre proveedores y disponemos de la siguiente información:</p>

    <ul class="text-justify">
        <li>De cada proveedor conocemos su nombre, dirección, ciudad, provincia y un código de proveedor que será único para cada uno de ellos.</li>
        <li>Nos interesa llevar un control de las piezas que nos suministra cada proveedor. Es importante conocer la cantidad de las diferentes piezas que nos suministra y en qué fecha lo hace. Tenga en cuenta que un mismo proveedor nos puede suministrar una pieza con el mismo código en diferentes fechas. El diseño de la base de datos debe permitir almacenar un histórico con todas las fechas y las cantidades que nos ha proporcionado un proveedor.</li>
        <li>Una misma pieza puede ser suministrada por diferentes proveedores.</li>
        <li>De cada pieza conocemos un código que será único, nombre, color, precio y categoría.</li>
        <li>Pueden existir varias categorías y para cada categoría hay un nombre y un código de categoría único.</li>
        <li>Una pieza sólo puede pertenecer a una categoría.</li>
    </ul>
@endsection