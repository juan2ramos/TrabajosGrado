@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Consulta de resultados</div>
                    <div class="panel-body">
                        @if($entry)
                            No tienes proyectos a evaluar
                        @else
                            <form class="form-horizontal" role="form">


                                <div class="form-group">
                                    <label class="col-md-4 control-label">Nombre de suproyecto</label>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" disabled
                                               name="name_project" value="{{$project->name_project}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Descripción proyecto</label>

                                    <div class="col-md-6">
                                            <textarea class="form-control" name="description" rows="3" disabled
                                                      id="textArea">{{$project->description}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 col-lg-offset-1 control-label">Nota 1</label>

                                    <div class="col-md-6">
                                        <select disabled class="form-control" name="note_1">
                                            <option value="">Seleccione una opción</option>
                                            @for($i = 0; $i <= 5 ; $i = $i + .5)
                                                <option @if($project->note_1 == $i) selected @endif value="{{$i}}">
                                                    {{$i}}
                                                </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-lg-offset-1 control-label">Nota 2</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="note_2" disabled>
                                            <option value="">Seleccione una opción</option>
                                            @for($i = 0; $i <= 5 ; $i = $i + .5)
                                                <option @if($project->note_2 == $i) selected @endif value="{{$i}}">
                                                    {{$i}}
                                                </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-lg-offset-1 control-label">Nota 3</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="note_3" disabled>
                                            <option value="">Seleccione una opción</option>
                                            @for($i = 0; $i <= 5 ; $i = $i + .5)
                                                <option @if($project->note_3 == $i) selected @endif value="{{$i}}">
                                                    {{$i}}
                                                </option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Fallas</label>

                                    <div class="col-md-6">
                                        <input disabled type="number" class="form-control" name="failure"
                                               value="{{$project->failure}}">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Observaciones</label>

                                    <div class="col-md-6">
                                            <textarea disabled class="form-control" name="observation" rows="3"
                                                      id="textArea">{{$project->observation}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-3 col-lg-offset-1 control-label">Estado</label>

                                    <div class="col-md-6">
                                        <select disabled class="form-control" name="state_id">
                                            @foreach($states as $state)
                                                <option @if($project->state_id == $state->id) selected
                                                                                              @endif value="{{$state->id}}">
                                                    {{$state->name_state}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 col-lg-offset-1 control-label">Archivos</label>
                                    @foreach($documents as $document)
                                        <a href="{{route('document', $document->url)}}" target="_blank">
                                            <p>Ver archivo</p>
                                        </a>
                                    @endforeach
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
