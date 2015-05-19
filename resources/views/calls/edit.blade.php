@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear convocatoria</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-info">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ url('/actualizar-convocatoria') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="id" value="{{ $call->id }}">
                            {{-- Cedula --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Año convocatoria</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="year" id="select">
                                        @for($i = 2013 ; $i <= 2017 ; $i++)
                                            <option @if($call->year == $i) selected @endif value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Periodo de la convocatoria</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="study_period" id="select">
                                        <option @if($call->study_period == 1) selected @endif value="1">1</option>
                                        <option @if($call->study_period == 2) selected @endif value="2">2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">fecha apertura </label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="open_date"
                                           value="{{ $call->open_date }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">fecha cierre </label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="close_date"
                                           value="{{ $call->close_date }}">
                                </div>
                            </div>
                            @foreach($options as $option)
                                <div class=" checkbox col-md-12">
                                    <label class="col-md-6 control-label">
                                        <input type="checkbox" name="options[]"
                                               value="{{$option->id}}"> {{$option->name_option}}
                                    </label>
                                </div>
                            @endforeach

                            <div class="form-group">
                                <div class="col-md-10 control-label">
                                    <button type="reset" class="btn btn-default">Cancelar</button>
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