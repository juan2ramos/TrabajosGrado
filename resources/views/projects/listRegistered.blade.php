@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Listado de inscritos</div>
                    <div class="panel-body">
                        <table class="table table-striped table-hover ">
                            <thead>
                            <tr>
                                <th>aprobado</th>
                                <th>No aprobado</th>
                                <th>Nombre</th>
                                <th>Opción</th>
                                <th>Observaciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="is--center">
                                <td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked=""></td>
                                <td><input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" ></td>
                                <td>Nombre estudiante</td>
                                <td>opcion</td>
                                <td>observacion corta</td>
                            </tr>
                            <tr class="is--center">
                                <td><input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1" checked=""></td>
                                <td><input type="radio" name="optionsRadios1" id="optionsRadios1" value="option1" ></td>
                                <td>Nombre estudiante</td>
                                <td>opcion</td>
                                <td>observacion corta</td>
                            </tr>
                            <tr class="is--center">
                                <td><input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" checked=""></td>
                                <td><input type="radio" name="optionsRadios2" id="optionsRadios1" value="option1" ></td>
                                <td>Nombre estudiante</td>
                                <td>opcion</td>
                                <td>observacion corta</td>
                            </tr>
                            <tr class="is--center">
                                <td><input type="radio" name="optionsRadios3" id="optionsRadios1" value="option1" checked=""></td>
                                <td><input type="radio" name="optionsRadios3" id="optionsRadios1" value="option1" ></td>
                                <td>Nombre estudiante</td>
                                <td>opcion</td>
                                <td>observacion corta</td>
                            </tr>
                            <tr class="is--center">
                                <td><input type="radio" name="optionsRadios4" id="optionsRadios1" value="option1" checked=""></td>
                                <td><input type="radio" name="optionsRadios4" id="optionsRadios1" value="option1" ></td>
                                <td>Nombre estudiante</td>
                                <td>opcion</td>
                                <td>observacion corta</td>
                            </tr>
                            <tr class="is--center">
                                <td><input type="radio" name="optionsRadios5" id="optionsRadios1" value="option1" checked=""></td>
                                <td><input type="radio" name="optionsRadios5" id="optionsRadios1" value="option1" ></td>
                                <td>Nombre estudiante</td>
                                <td>opcion</td>
                                <td>observacion corta</td>
                            </tr>
                            <tr class="is--center">
                                <td><input type="radio" name="optionsRadios6" id="optionsRadios1" value="option1" checked=""></td>
                                <td><input type="radio" name="optionsRadios6" id="optionsRadios1" value="option1" ></td>
                                <td>Nombre estudiante</td>
                                <td>opcion</td>
                                <td>observacion corta</td>
                            </tr>


                            </tbody>
                        </table>

                        <div class="form-group">
                            <div class="col-md-10 control-label">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
