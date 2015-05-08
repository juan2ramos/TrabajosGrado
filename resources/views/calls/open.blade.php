@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Crear convocatoria</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ url('/inscripcion-estudiantes') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{-- Cedula --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Año convocatoria</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="identification"
                                           value="{{ old('identification') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Periodo de la convocatoria</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="identification"
                                           value="{{ old('identification') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">fecha apertura </label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="identification"
                                           value="{{ old('identification') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">fecha cierre </label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="identification"
                                           value="{{ old('identification') }}">
                                </div>
                            </div>

                            <div class=" checkbox col-md-12">
                                <label class="col-md-6 control-label">
                                    <input type="checkbox"> Opción 1
                                </label>
                            </div>
                            <div class="checkbox col-md-12">
                                <label class="col-md-6 control-label">
                                    <input type="checkbox"> Opción 2
                                </label>
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
