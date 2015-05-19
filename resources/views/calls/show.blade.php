@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear convocatoria</div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover ">
                            <thead>
                            <tr>
                                <th>Periodo</th>
                                <th>Año</th>
                                <th>Fecha apertura</th>
                                <th>Fecha cierre</th>
                                <th>Acción</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(isset($calls))
                                @foreach($calls as $call)
                                    <tr class="is--center">

                                        <td>{{$call->study_period}}</td>
                                        <td>{{$call->year}}</td>
                                        <td>{{$call->open_date}}</td>
                                        <td>{{$call->close_date}}</td>
                                        <td>
                                            <a href="{{route('editCall',$call->id)}}">
                                                Actualizar
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection