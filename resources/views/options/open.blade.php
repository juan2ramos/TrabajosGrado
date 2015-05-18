@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Ingrese propuesta de grado</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-info">
                                {{ Session::get('message') }}
                            </div>
                        @endif
                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ url('/opciones-grado') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{-- Cedula --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Nombre de la opción</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name_option"
                                           value="{{ old('identification') }}">
                                </div>
                            </div>
                            {{-- nombre --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Descripción</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" rows="3" name="description" id="textArea"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-lg-offset-1 control-label">Estado</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="state" id="select">
                                        <option value="1">Activo</option>
                                        <option value="0">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3 col-lg-offset-1 control-label">Macro proyectos</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="macroproject_id" id="select" >
                                        @foreach($macroprojects as $macroproject)
                                            <option value="{{$macroproject->id}}">{{$macroproject->name_macroprojects}}</option>
                                        @endforeach
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



