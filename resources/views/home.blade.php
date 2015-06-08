@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        @if (Auth::guest())
                            Plataforma de trabajos de grado
                        @else
                            Bienvenido {{ Auth::user()->name }} a la plataforma de trabajos de grado
                        @endif
                    </div>
                    <div class="panel-body">
                        Bienvenido a la plataforma  de trabajos de grado
este espacio es para establecer una comunicación entre  el área de investigación  de la fundación
universitaria panamericana y  los alumnos  candidatos a inscribir su proyecto de grado.
                    </div>
                    Puedes hacerlo de la siguiente manera:
                    </div>
Escoge la opción 1. Si lo que deseas es crear tu grupo  y traernos la propuesta de trabajo de grado
Escoge la opción 2. Si deseas inscribirte a la opción de trabajo de grado
 propuesta por nuestro equipo investigativo.
                </div>
            </div>
        </div>
    </div>
@endsection
