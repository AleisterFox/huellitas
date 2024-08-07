<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Huellitas</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @stack('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body>
    <style>
        a {
            display: flex;
            align-items: center;
            color: white !important;
            font-size: 15px !important;
        }

        .active {
            background-color: #8D96A4 !important;
        }

        .active > span {
            padding: 1px;
        }
    </style>
    <div id="app">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: #5a616b;">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-5 d-none d-sm-inline">Huellitas</span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}" class="nav-link align-middle px-0 text-center">
                                    <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Pedidos</span> </a>
                                <ul class="collapse nav flex-column ms-4" id="submenu1" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 1 </a>
                                    </li>
                                    <li>
                                        <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Item</span> 2 </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                @php
                                    $shouldOpen = in_array(request()->route()->getName(), ['categorias.index', 'productos.index', 'pets.index', 'pet-categories.index']);
                                @endphp
                                <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                    <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Gestión Tienda</span></a>
                                <ul class="collapse nav flex-column ms-4 {{ $shouldOpen ? 'show' : '' }}" id="submenu2" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="{{ route('categorias.index') }}" 
                                            class="nav-link px-0 {{ request()->route()->getName() == 'categorias.index' ? 'active' : '' }}"> 
                                            <span class="d-none d-sm-inline">Categorías</span></a>
                                    </li>
                                    <li>
                                        <a href="{{ route('productos.index') }}" 
                                            class="nav-link px-0 {{ request()->route()->getName() == 'productos.index' ? 'active' : '' }}"> 
                                            <span class="d-none d-sm-inline">Productos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pets.index') }}" 
                                            class="nav-link px-0 {{ request()->route()->getName() == 'pets.index' ? 'active' : '' }}"> 
                                            <span class="d-none d-sm-inline">Perritos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pet-categories.index') }}" 
                                            class="nav-link px-0 {{ request()->route()->getName() == 'pet-categories.index' ? 'active' : '' }}"> 
                                            <span class="d-none d-sm-inline">Categoria Perritos</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            @php
                                $shouldOpen = in_array(request()->route()->getName(), ['contacto.index', 'pet-adoption-form.index']);
                            @endphp
                            <li>
                                <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Gestión página</span> </a>
                                <ul class="collapse nav flex-column ms-4 {{ $shouldOpen ? 'show' : '' }}" id="submenu3" data-bs-parent="#menu">
                                    <li class="w-100">
                                        <a href="{{ route('contacto.index') }}" class="nav-link px-0 {{ request()->route()->getName() == 'contacto.index' ? 'active' : '' }}"> 
                                            <span class="d-none d-sm-inline">Formulario de contacto</span>
                                        </a>
                                    </li>
                                    <li class="w-100">
                                        <a href="{{ route('pet-adoption-form.index') }}" class="nav-link px-0 {{ request()->route()->getName() == 'pet-adoption-form.index' ? 'active' : '' }}"> 
                                            <span class="d-none d-sm-inline">Solicitudes de adopciones</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="d-none d-sm-inline mx-1">{{ auth()->user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    <div class="container">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    @stack('scripts')
</body>

</html>