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
                        Texto de bienvenida explicando la plataforma
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
