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
                              action="{{ url('/abrir-convocatoria') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{-- Cedula --}}
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
                                <label class="col-md-4 control-label">fecha apertura </label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="open_date"
                                           value="{{ old('identification') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">fecha cierre </label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="close_date"
                                           value="{{ old('identification') }}">
                                </div>
                            </div>
                            @foreach($options as $option)
                                <div class=" checkbox col-md-12">
                                    <label class="col-md-6 control-label">
                                        <input type="checkbox" name="options[]" value="{{$option->id}}" > {{$option->name_option}}
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