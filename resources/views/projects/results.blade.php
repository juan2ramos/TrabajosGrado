@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Resultados</div>
                    <div class="panel-body">
                        @if(isset($projectStudents))
                            <table class="table table-striped table-hover ">
                                <thead>
                                <tr>
                                    <th>Estado</th>
                                    <th>Nombre</th>
                                    <th>Estudiante</th>
                                    <th>nota</th>
                                    <th>Observaciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projectStudents as $projectStudent)
                                    <tr class="is--center">
                                        <td>{{$projectStudent['state']->name_state}}</td>
                                        <td>{{$projectStudent['project']->name_project}}</td>
                                        <td>{{$projectStudent['user']->name}}</td>
                                        <td>{{$projectStudent['project']->note_1}}</td>
                                        <td>{{$projectStudent['project']->observation}}</td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
