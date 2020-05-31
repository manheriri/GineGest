<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>

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
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                                    @if(Auth::user()->userType =='paciente')
                                    <a class="dropdown-item" href="{{ route('misCitas') }}"
                                              onclick="event.preventDefault();
                                                     document.getElementById('misCitas-form').submit();">
                                        {{ __('Mis citas') }}
                                    </a>

                                    <form id="misCitas-form" action="{{ route('misCitas') }}" method="GET" style="display: none;">
                                        @csrf
                                    </form>
                                    @endif
                                        @if(Auth::user()->userType =='donante')

                                            <a class="dropdown-item" href="{{ route('misCitasDonante') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('misCitasDonante-form').submit();">
                                                {{ __('Mis Citas') }}
                                            </a>

                                            <form id="misCitasDonante-form" action="{{ route('misCitasDonante') }}" method="GET" style="display: none;">
                                                @csrf
                                            </form>
                                        @endif
                                    @if(Auth::user()->userType =='donante')

                                            <a class="dropdown-item" href="{{ route('misResultadosDonacion') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('misResultadosDonacion-form').submit();">
                                                {{ __('Mis resultados de donación') }}
                                            </a>

                                            <form id="misResultadosDonacion-form" action="{{ route('misResultadosDonacion') }}" method="GET" style="display: none;">
                                                @csrf
                                            </form>
                                    @endif

                                    @if(Auth::user()->userType =='paciente')
                                        <a class="dropdown-item" href="{{ route('observacionesPaciente') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('observacionesPaciente-form').submit();">
                                            {{ __('Mis observaciones') }}
                                        </a>

                                        <form id="observacionesPaciente-form" action="{{ route('observacionesPaciente') }}" method="GET" style="display: none;">
                                            @csrf
                                        </form>
                                    @endif
                                    @if(Auth::user()->userType =='paciente')
                                        <a class="dropdown-item" href="{{ route('misEmbarazos') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('misEmbarazos-form').submit();">
                                            {{ __('Mis Embarazos') }}
                                        </a>

                                        <form id="misEmbarazos-form" action="{{ route('misEmbarazos') }}" method="GET" style="display: none;">
                                            @csrf
                                        </form>
                                    @endif
                                    @if(Auth::user()->userType =='paciente')
                                        <a class="dropdown-item" href="{{ route('tratamientosPaciente') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('tratamientosPaciente-form').submit();">
                                            {{ __('Mis tratamientos') }}
                                        </a>

                                        <form id="tratamientosPaciente-form" action="{{ route('tratamientosPaciente') }}" method="GET" style="display: none;">
                                            @csrf
                                        </form>
                                    @endif

                                    @if(Auth::user()->userType =='personalSanitario')
                                        <a class="dropdown-item" href="{{ route('crearMedicamento.index') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('crearMedicamento-form').submit();">
                                            {{ __('Listado de medicamentos') }}
                                        </a>

                                        <form id="crearMedicamento-form" action="{{ route('crearMedicamento.index') }}" method="GET" style="display: none;">
                                            @csrf
                                        </form>
                                    @endif
                                    @if(Auth::user()->userType =='personalSanitario')
                                        <a class="dropdown-item" href="{{ route('donacion.index') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('donacion-form').submit();">
                                            {{ __('Lista de donantes') }}
                                        </a>

                                        <form id="donacion-form" action="{{ route('donacion.index') }}" method="GET" style="display: none;">
                                            @csrf
                                        </form>
                                    @endif

                                    @if(Auth::user()->userType =='personalSanitario')
                                        <a class="dropdown-item" href="{{ route('citasPersonal') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('citasPersonal-form').submit();">
                                            {{ __('Citas con pacientes') }}
                                        </a>

                                        <form id="citasPersonal-form" action="{{ route('citasPersonal') }}" method="GET" style="display: none;">
                                            @csrf
                                        </form>
                                    @endif
                                        @if(Auth::user()->userType =='personalSanitario')
                                            <a class="dropdown-item" href="{{ route('citasdonantes.index') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('citasdonantes-form').submit();">
                                                {{ __('Citas con donantes') }}
                                            </a>

                                            <form id="citasdonantes-form" action="{{ route('citasdonantes.index') }}" method="GET" style="display: none;">
                                                @csrf
                                            </form>
                                        @endif

                                    @if(Auth::user()->userType =='personalSanitario')
                                        <a class="dropdown-item" href="{{ route('pacientes') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('pacientes-form').submit();">
                                            {{ __('Pacientes') }}
                                        </a>

                                        <form id="pacientes-form" action="{{ route('pacientes') }}" method="GET" style="display: none;">
                                            @csrf
                                        </form>
                                    @endif
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Cerrar Sesión') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
</html>
