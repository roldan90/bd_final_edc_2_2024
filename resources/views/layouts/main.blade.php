<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="application/vnd.ms-excel;" charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('librerias/bootstrap5/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('librerias/alertifyjs/css/alertify.min.css') }}">
    <link rel="stylesheet" href="{{ asset('librerias/alertifyjs/css/themes/default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('librerias/datatables/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ asset('librerias/datatables/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <title>@yield('titulo')</title>
</head>
<body>
    @include('sweetalert::alert')
    @include('shared/menu')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card colbgc">
                    <div class="card-body text-center">
                        <h3>@yield('titulo_pagina')</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col ">
                <div class="card colbgc">
                    <div class="card-body colbgc">
                        
                        @yield('contenido')
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <script src="{{ asset('librerias/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('librerias/bootstrap5/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('librerias/sweetalert2.js') }}"></script>
    <script src="{{ asset('librerias/alertifyjs/alertify.js') }}"></script>
    <script src="{{ asset('librerias/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('librerias/datatables/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('librerias/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('librerias/datatables/jszip.min.js') }}"></script>
    <script src="{{ asset('librerias/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ asset('librerias/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ asset('librerias/datatables/buttons.html5.min.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @stack('scripts')
</body>
</html>