<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('Le Lavage-') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" >
                <img  src="http://localhost/le_lavage/public/img/logo.png" width="100" height="50" >
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                                </li>
                    <li class="nav-item">
                                    <a class="nav-link" href="{{ route('cajeros.index') }}">{{ __('Cajeros') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('servicios.index') }}">{{ __('Servicios') }}</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('clientes.index') }}">{{ __('Clientes') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('registros.index') }}">{{ __('Registros') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('trabajadores.index') }}">{{ __('Trabajadores') }}</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{ route('vehiculos.index') }}">{{ __('Veh??culos') }}</a>
                                </li>


                    </ul>

                     
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                           
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesi??n') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<footer class="footer">
<div class="container-fluid">
<div class="container bg-light">
<div class="footer-copyright text-center py-3" class="footer__p" position: fixed;>?? 2021 Copyright, Xicotepec de Ju??rez Puebla
      <a href="https://mdbootstrap.com/education/bootstrap/"> </a>
    </div></div></div>
    </footer>
</html>