<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title') UniPanamericana @show</title>

    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{asset('
				/img/logo.gif')}}" alt=""/><span>Unipanamericana</span></a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    @if (Auth::check())
                        @if(Auth::user()->rol == 'researchers')
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">Convocatoria TG <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('abrir-convocatoria') }}">Abrir convocatoria </a></li>
                                    <li><a href="{{ url('ver-convocatoria') }}">Ver convocatoria </a></li>
                                    <li><a href="{{ url('listado-inscritos') }}">Generar listado de inscritos</a></li>
                                    <li><a href="{{ url('macroproyectos') }}">Macroproyectos</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ url('opciones-grado') }}">Opciones</a></li>
                            <li><a href="{{ url('historicos') }}">Historicos</a></li>
                            <li><a href="{{ url('estadisticas') }}">Estadísticas</a></li>
                            <li><a href="{{ url('resultados') }}">Resultados</a></li>
                            <li><a href="{{ url('seguimiento-proyectos') }}">Seguimiento</a></li>
                        @endif

                        @if(Auth::user()->rol == 'students')
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">Gestión proyectos <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="opciones-propuesta">Escoge una opción</a></li>
                                    <li><a href="subir-propuesta">Sube tu propuesta</a></li>
                                    <li><a href="consultar-resultados">Consulta los resultados</a></li>
                                </ul>
                            </li>
                        @endif
                    @else
                        <li><a href="{{ url('inscripcion-estudiantes') }}">Inscripción estudiante</a></li>
                    @endif

                </ul>

                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/auth/login') }}">Inicio de sesión</a></li>
                        {{--<li><a href="{{ url('/auth/register') }}">Registrarse</a></li>--}}
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/auth/logout') }}">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <main class="container spaceBottom">
        @yield('content')
    </main>

    <footer>
        Avenida (Calle) 32 No. 17 - 62 Bogotá D.C., Colombia -
        Teléfonos: Admisiones: 3078161 - Información: 3380666
    </footer>
</div>
<!-- Scripts -->
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/bootstrap.min.js') }}"></script>
<script src="{{ url('js/main.js') }}"></script>
<script src="{{ url('js/chart.js') }}"></script>
</body>
</html>
