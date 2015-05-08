@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Escoga su propuesta</div>
                    <div class="panel-body">

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/inscripcion-estudiantes') }}">
                            <div class="form-group">
                                <label class="col-md-4 col-lg-offset-1 control-label">Selecciona una opción</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="select">
                                        <option>Selecciona una opción</option>
                                        <option>Opción 1</option>
                                        <option>Opción 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-10 col-lg-offset-1">
                                    <textarea class="form-control" id="textArea">
                                        Descripción de la opción
                                    </textarea>
                                 </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-11 control-label">
                                    <button type="reset" class="btn btn-default">Cancel</button>
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
