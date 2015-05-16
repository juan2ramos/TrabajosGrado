@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Listado de inscritos</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ url('/listado-inscritos') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <table class="table table-striped table-hover ">
                                <thead>
                                <tr>
                                    <th>aprobado</th>
                                    <th>No aprobado</th>
                                    <th>Nombre</th>
                                    <th>Opción</th>
                                    <th>Observaciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(isset($projectStudents))
                                    @foreach($projectStudents as $projectStudent)
                                        <tr class="is--center">
                                            <td><input type="radio" name="{{$projectStudent['project']->id}}" value="2"
                                                @if($projectStudent['state']->id == 2) checked=""@endif></td>
                                            <td><input type="radio" name="{{$projectStudent['project']->id}}" value="3"
                                                @if($projectStudent['state']->id == 3) checked=""@endif></td>

                                            <td>{{$projectStudent['state']->name_state}}</td>
                                            <td>{{$projectStudent['project']->name_project}}</td>
                                            <td>{{$projectStudent['user']->name}}</td>
                                            <td>{{$projectStudent['project']->observation}}</td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                            </table>

                            <div class="form-group">
                                <div class="col-md-1 control-label">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
