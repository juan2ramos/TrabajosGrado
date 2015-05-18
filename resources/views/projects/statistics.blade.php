@extends('app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Estadisticas</div>
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
                            <label class="col-md-3 col-lg-offset-1 control-label">Estado</label>

                            <div class="col-md-6">
                                <select class="form-control" id="select">
                                    <option>Selecciona una opción</option>
                                    <option>Opción 1</option>
                                    <option>Opción 2</option>
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
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Estadisticas</h3>
                            </div>
                            <div class="panel-body">
                                <div style="width:100%">
                                    <div>
                                        <canvas id="canvas" height="300" width="600"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var randomScalingFactor = function(){ return Math.round(Math.random()*100)};
        var lineChartData = {
            labels : ["January","February","March","April","May","June","July"],
            datasets : [
                {
                    label: "My First dataset",
                    fillColor : "rgba(220,220,220,0.2)",
                    strokeColor : "rgba(220,220,220,1)",
                    pointColor : "rgba(220,220,220,1)",
                    pointStrokeColor : "#fff",
                    pointHighlightFill : "#fff",
                    pointHighlightStroke : "rgba(220,220,220,1)",
                    data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                },
                {
                    label: "My Second dataset",
                    fillColor : "rgba(151,187,205,0.2)",
                    strokeColor : "rgba(151,187,205,1)",
                    pointColor : "rgba(151,187,205,1)",
                    pointStrokeColor : "#fff",
                    pointHighlightFill : "#fff",
                    pointHighlightStroke : "rgba(151,187,205,1)",
                    data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
                }
            ]
        }
        window.onload = function(){
            var ctx = document.getElementById("canvas").getContext("2d");
            window.myLine = new Chart(ctx).Line(lineChartData, {
                responsive: true
            });
        }
    </script>
@endsection
