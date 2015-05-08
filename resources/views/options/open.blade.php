@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ingrese propuesta de grado</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ url('/inscripcion-estudiantes') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{-- Cedula --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nombre de su proyecto</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="identification"
                                           value="{{ old('identification') }}">
                                </div>
                            </div>
                            {{-- nombre --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Descripción</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" rows="3" id="textArea"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-lg-offset-1 control-label">Estado</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="select">
                                        <option>Selecciona una opción</option>
                                        <option>Activo</option>
                                        <option>Inactivo</option>
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
