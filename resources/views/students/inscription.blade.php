@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Incripción Estuduiante</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Error </strong> <br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/inscripcion-estudiantes') }}">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            {{-- Cedula --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">Cedula</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="identification" value="{{ old('identification') }}">
                                </div>
                            </div>
                            {{-- nombre --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">nombre</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                                </div>
                            </div>
                            {{-- apellido --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">apellido</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                </div>
                            </div>
                            {{-- segundo apellido --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">segundo apellido</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="second_last_name" value="{{ old('second_last_name') }}">
                                </div>
                            </div>
                            {{-- email --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">email</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            {{-- celular --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">celular</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="cellphone" value="{{ old('cellphone') }}">
                                </div>
                            </div>
                            {{-- teléfono --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">teléfono</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="phone" value="{{ old('phone') }}">
                                </div>
                            </div>


                            {{-- estado matrícula --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">estado matrícula</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="state_record" value="{{ old('state_record') }}">
                                </div>
                            </div>
                            {{-- programa estudiante --}}
                            <div class="form-group">
                                <label class="col-md-4 control-label">programa estudiante</label>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="student_program" value="{{ old('student_program') }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button col-md-12 type="submit" class="btn btn-primary">
                                        Enviar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
