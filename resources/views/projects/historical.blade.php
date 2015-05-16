@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Historicos</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ url('/historicos') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Año convocatoria</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="year" id="select" >
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Periodo de la convocatoria</label>
                                <div class="col-md-6">
                                    <select class="form-control" name="study_period" id="select" >
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 control-label">
                                    <button type="reset" class="btn btn-default">Cancelar</button>
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                            </div>
                        </form>
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
