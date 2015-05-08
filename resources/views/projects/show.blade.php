@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Sube tu propuesta</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ url('/inscripcion-estudiantes') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{-- Cedula --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Digite  el nombre de su proyecto</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="identification"
                                           value="{{ old('identification') }}">
                                </div>
                            </div>
                            {{-- nombre --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Describa  su proyecto</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" rows="3" id="textArea"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Documento</label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control file" id="input-1a" name="identification"
                                           value="{{ old('identification') }}">
                                </div>
                            </div>
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