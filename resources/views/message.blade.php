@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ingrese propuesta de grado</div>
                    <div class="panel-body">
                        @if ($message)
                            <div class="alert alert-warning">
                                {{ $message }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



