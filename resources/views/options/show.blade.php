@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Escoga su propuesta</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-info">
                                {{ Session::get('message') }}
                            </div>
                        @else

                            @if($studentCall)
                                <span>ya tienes un proyecto inscrito</span>
                            @else
                                @if($options)
                                    <form class="form-horizontal" role="form" method="POST"
                                          action="{{ url('/opciones-propuesta') }}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="hidden" name="call_id" value="{{ $call->id }}">
                                        <input type="hidden" name="name_project" value="{{$options[0]->name_option}}"/>

                                        <div class="form-group">
                                            <label class="col-md-4 col-lg-offset-1 control-label">Selecciona una
                                                opción</label>

                                            <div class="col-md-6">
                                                <select class="form-control" name="option_id" id="select">
                                                    @foreach($options as $option)
                                                        <option value="{{$option->id}}">{{$option->name_option}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-10 col-lg-offset-1">
                                    <textarea name="description" class="form-control" id="textArea"
                                              readonly>{{$options[0]->description}} </textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-11 control-label">
                                                <button type="reset" class="btn btn-default">Cancel</button>
                                                <button type="submit" class="btn btn-primary">Enviar</button>
                                            </div>
                                        </div>
                                    </form>
                                @else
                                    <span> hay convocatorias abiertas </span>
                                @endif
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
