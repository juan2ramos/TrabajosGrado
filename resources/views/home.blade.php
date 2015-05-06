@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        @if (Auth::guest())
                            INVITACION A ESTUDIANTES- TRABAJOS DE GRADO MODULO DE PRESENTACION
                        @else
                            Bienvenido {{ Auth::user()->name }} a la plataforma de trabajo
                        @endif
                    </div>
                    <div class="panel-body">
                        CAMPO DE TEXTO ALIMENTADO POR LOS DOCENTES-OPCIONES DE TRABAJO DE GRADO (VIENE DE LA TABLA
                        MODULO DOCENTE )
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
