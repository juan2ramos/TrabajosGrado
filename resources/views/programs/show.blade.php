@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Macroproyectos</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-info">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ url('macroproyectos') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="state" value="1">
                            <div class="form-group">
                                <label class="col-md-4 control-label"> Nombre </label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name_macroprojects"
                                           value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"> Descripción </label>


                                <div class="col-md-6">
                                    <textarea class="form-control" rows="3" name="description" id="textArea"></textarea>
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