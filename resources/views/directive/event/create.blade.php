@extends('directive.layout')
@section('content')


@include('directive.person.list')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Informacion de Evento
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">

                        <tbody>
                            <tr>
                                <td align="right" width="20%" valign="top">
                                    <div class="control-label">
                                        <span>*</span> <label class="control-label" for="Titulo">Titulo</label>
                                    </div>
                                </td>
                                <td align="left" width="80%" valign="top"><input
                                        name="title" type="text" maxlength="100" id="title"
                                        class="form-control" fld="name" initval="Event Title" />
                                    <div id="nameerr" fldtype="err"></div></td>
                            </tr>
                            <tr>
                                <td align="right" width="20%" valign="top">
                                    <div class="control-label">
                                        <span>*</span> <label class="control-label" for="Titulo">Categoria</label>
                                    </div>
                                </td>
                                <td align="left" width="80%" valign="top">
                                    <select class="form-control"
                                            id="category">
                                        <option>CONGRESO</option>
                                        <option>CONFERENCIA</option>
                                        <option>TALLER</option>

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="right" width="20%" valign="top">
                                    <div class="control-label">
                                        <span>*</span> <label class="control-label" for="Titulo">Ubicacion</label>
                                    </div>
                                </td>
                                <td align="left" width="80%" valign="top"><input
                                        name="title" type="text" maxlength="100" id="title"
                                        class="form-control" fld="name" initval="Event Title" />
                                    <div id="nameerr" fldtype="err"></div></td>
                            </tr>
                            <tr>
                                <td align="right" width="20%" valign="top">
                                    <div class="control-label">
                                        <span>*</span> <label class="control-label" for="Titulo">Organizador</label>
                                    </div>
                                </td>
                                <td align="left" width="80%" valign="top"><select
                                        class="form-control" id="type">
                                        <option>SOPIOS</option>
                                        <option>UNMSM</option>
                                        <option>PUCP</option>
                                        <option>URP</option>
                                    </select></td>
                            </tr>
                            <tr>
                                <td align="right" width="20%" valign="top">
                                    <div class="control-label">
                                        <span>*</span> <label class="control-label" for="Titulo">Logo
                                            de evento</label>
                                    </div>
                                </td>
                                <td align="left" width="80%" valign="top">
                                    <div class="form-group">
                                        <label for="exampleInputFile">File input</label> <input
                                            type="file" id="exampleInputFile" />
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td align="right" width="20%" valign="top">
                                    <div class="control-label">
                                        <span>*</span> <label class="control-label" for="Titulo">Dia
                                            y Hora</label>
                                    </div>
                                </td>
                                <td align="left" width="80%" valign="top">
                                    <table class="table">

                                        <tbody>

                                            <tr>
                                                <td>
                                                    <div id="label" class="col-xs-2">
                                                        <h5>Inicio de Evento</h5>
                                                    </div>

                                                    <div id="Start Day" class="col-xs-4">
                                                        <div class="input-group input-append date"
                                                             id="datePickerStart">
                                                            <input type="text" class="form-control" name="date"
                                                                   placeholder="DD/MM/YYYY" /> <span
                                                                   class="input-group-addon add-on"><span
                                                                    class="glyphicon glyphicon-calendar"></span></span>
                                                        </div>
                                                    </div>
                                                    <div id="Start Time" class="col-xs-4">
                                                        <div class="input-group clockpicker">
                                                            <input type="time" class="form-control" /> <span
                                                                class="input-group-addon"> <span
                                                                    class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div id="label" class="col-xs-2">
                                                        <h5>Final de Evento</h5>
                                                    </div>

                                                    <div id="End Day" class="col-xs-4">
                                                        <div class="input-group input-append date"
                                                             id="datePickerEnd">
                                                            <input type="text" class="form-control" name="date"
                                                                   placeholder="DD/MM/YYYY" /> <span
                                                                   class="input-group-addon add-on"><span
                                                                    class="glyphicon glyphicon-calendar"></span></span>
                                                        </div>
                                                    </div>
                                                    <div id="End Time" class="col-xs-4">
                                                        <div class="input-group clockpicker">
                                                            <input type="time" class="form-control" /> <span
                                                                class="input-group-addon"> <span
                                                                    class="glyphicon glyphicon-time"></span>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </td>



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
                    <i class="fa fa-bar-chart-o fa-fw"></i> Detalles del Expositor
                </h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table">

                        <tbody>
                            <tr>
                                <td align="left" width="20%" valign="top">
                                    <div class="control-label">
                                        <span>*</span> <label class="control-label" for="Titulo">Nombre:</label>
                                    </div>
                                </td>
                                <td align="left" width="80%" valign="top"><input
                                        name="title" type="text" maxlength="100" id="title"
                                        class="form-control" fld="name" initval="Event Title" />
                                    <div id="nameerr" fldtype="err"></div></td>
                            </tr>

                            <tr>

                                <td align="center" width="70%" valign="top">
                                    <div class="control-label">
                                        <label class="control-label" for="Titulo"> <a
                                                href="#" role="button" data-toggle="modal"
                                                data-target="#modalSearchPerson">Ver Ponentes</a>
                                        </label>
                                    </div>
                                </td>

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
                    <i class="fa fa-bar-chart-o fa-fw"></i> Detalle de Costo
                </h3>
            </div>
            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>

                                    <tr>
                                        <td align="right" width="20%" valign="top">
                                            <div class="control-label">
                                                <span>*</span> <label class="control-label"
                                                                      for="Titulo">Monto</label>
                                            </div>
                                        </td>

                                        <td align="center" width="80%" valign="middle">
                                            <div class="input-group">
                                                <span class="input-group-addon">S/.</span> <input
                                                    type="text" class="form-control"
                                                    aria-label="Amount (to the nearest dollar)" /> <span
                                                    class="input-group-addon">.00</span>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td align="right" width="20%" valign="top">
                                            <div class="control-label">
                                                <span>*</span> <label class="control-label"
                                                                      for="Capacidad">Capacidad</label>
                                            </div>
                                        </td>
                                        <td align="left" width="80%" valign="top"><input
                                                name="title" type="text" maxlength="9"
                                                class="form-control"/>
                                        </td>


                                    </tr>


                                </tbody>
                            </table>
                        </div>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('scripts')
<script>
    $(document).ready(function () {

            $('#datePickerStart').datepicker({
            format: 'dd/mm/yyyy'
        });

        $('#datePickerEnd').datepicker({
            format: 'dd/mm/yyyy'
        });

        $('.clockpicker').clockpicker();


    });
</script>
@endsection



