@extends('directive.layout')
@section('content')

@include('directive.event.fragments.modalExpositor')

<div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-bar-chart-o fa-fw"></i>Busca tu evento
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>

                                    <th width="15%" align="left">A�O</th>
                                    <th width="15%" align="left">FRECUENCIA</th>
                                    <th width="15%" align="left">CATEGORIA</th>
                                    <th width="15%" align="left">EJES TEMATICOS</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="gradeA odd">


                                    <td align="left" width="10%"><select
                                            class="form-control" id="type">
                                            <option>2015</option>
                                            <option>2014</option>
                                            <option>2013</option>
                                            <option>2012</option>
                                        </select></td>
                                    <td align="left" width="15%"><select
                                            class="form-control" id="type">
                                            <option>LOS PRIMEROS</option>
                                            <option>LOS MAS ULTIMOS</option>
                                        </select></td>
                                    <td align="left" width="15%"><select
                                            class="form-control" id="type">
                                            <option>CONGRESO</option>
                                            <option>CONFERENCIA</option>
                                            <option>TALLER</option>

                                        </select></td>
                                    <td align="left" width="25%"><select
                                            class="form-control" id="type">
                                            <option>OPTIMIZACION MATEMATICA</option>
                                            <option>GESTION DEL CONOCIMIENTO</option>
                                            <option>METODOS COMPUTACIONALES</option>

                                        </select></td>

                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Lista de Eventos
                    </h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="ng-scope ng-isolate-scope">
                            <div class="row row-gap-medium">

                                <div class="col-xs-3">
                                    <a data-ng-href="" href=""> <img
                                            data-ng-src="http://www.upn.edu.pe/sites/default/files/field/image/g_0c4dcb33-c77d-46ca-b6dc-da700a19a3b9.jpg"
                                            alt="" class="img-responsive img-bordered"
                                            src="http://www.upn.edu.pe/sites/default/files/field/image/g_0c4dcb33-c77d-46ca-b6dc-da700a19a3b9.jpg" />
                                    </a>
                                </div>
                                <div class="col-xs-9">
                                    <div class="row">
                                        <div class="col-xs-9">
                                            <h3 class="h-slim">
                                                <a
                                                    data-ng-href="/course/beginning-ios-app-development--nd006"
                                                    class="ng-binding"
                                                    href="/course/beginning-ios-app-development--nd006">Congreso
                                                    Nacional de Investigacion Operativo</a> <span
                                                    data-ng-hide="course['available']"
                                                    class="badge badge-squared badge-soon text-uppercase ng-hide">Privado</span>
                                            </h3>
                                        </div>
                                        <div class="col-xs-3">
                                            <span class="caption text-right ng-binding"> <span
                                                    class="icon-level icon-level-1"></span> CONGRESO
                                            </span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="ng-binding">

                                                <p class="ng-hide">Descripcion del evento</p>




                                                <table class="table">
                                                    <thead>

                                                        <tr>
                                                            <th width="25%" align="left">PONENTES</th>

                                                            <th width="25%" align="left">FECHA Y HORA</th>
                                                            <th width="15%" align="left">PUBLICO GENERAL</th>
                                                            <th width="15%" align="left">SOCIO SOPIOS</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="gradeA odd">
                                                            <td width="25%" align="left"><label
                                                                    class="control-label" for="Titulo"> <a
                                                                        href="#" role="button" data-toggle="modal"
                                                                        data-target="#showExpositor">Ver Ponentes</a>
                                                                </label></td>

                                                            <td align="left" width="25%"><label>20,21,22
                                                                    de Noviembre 2015 </label></td>
                                                            <td align="left" width="15%"><label>S/.500</label>
                                                            </td>
                                                            <td align="left" width="15%"><label>S/.450</label>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>


                                            </div>
                                        </div>
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>

@endsection
@section('scripts')
<script>
    $(document).ready(function () {

     		$(document).ready(function() {

		
				$('#tableExpositor').DataTable();
		

			$('#datePickerStart').datepicker({
				format : 'dd/mm/yyyy'
			});

			$('#datePickerEnd').datepicker({
				format : 'dd/mm/yyyy'
			});

			$('.clockpicker').clockpicker();

		});



    });
</script>
@endsection



