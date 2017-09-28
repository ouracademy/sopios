@extends('copios.layout.index')
@section('title', 'Llamada a trabajos')
@section('description', 
'Bases de envio de trabajos, publicaciones y fechas importantes de COPIOS 2017') 
@section('content')
<section id="the-venue">
    <div class="container-fluid">
        <h2>Llamada a trabajos</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h3 class="title-red">Envio de trabajos</h3>
                <p>Antes de enviar su resumen, recuerde que este deberá cumplir las <a href="{{asset("copios/Bases para envio de trabajos.pdf")}}" target="_blank"
                        target="_blank">Bases para envio de trabajos</a> (use la <a href="{{asset("copios/Plantilla para resumenes COPIOS-2017.pdf")}}" target="_blank">Plantilla</a> como guía) y estar dentro de las <a href="{{url("copios/2017/que-es")."#areas"}}">Áreas temáticas</a>.</p>
                <div class="call-to-action">
                    <a href="https://easychair.org/conferences/?conf=copios2017" target="_blank"><button type="button" class="btn btn-primary">Enviar resumen/trabajo</button></a>
                </div>
                <h3 class="title-red">Publicaciones</h3>
                <h5>MEMORIAS</h5>
                <p>Se publicará un libro con las ponencias, que tendrá una versión digital en CD.</p>
                <h5>PUBLICACIÓN EN REVISTAS ESPECIALIZADAS</h5>
                <p>Los artículos seleccionados del evento se publicarán en la revista de SOPIOS.</p>
            </div>
            <div class="col-xs-12 col-sm-6">
                <img src="https://images.pexels.com/photos/364671/pexels-photo-364671.jpeg?w=940&h=650&auto=compress&cs=tinysrgb" width="100%"
                    class="call-for-contributions" />
            </div>
        </div>

    </div>
</section>
<section id="the-schedule">
    <div class="container-fluid">
        <h2>Fechas importantes</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-12 schedule-day">
                <div class="day-schedule-title">
                    <h3>Fecha</h3>
                    <h5>Actividad</h5>
                </div>
                <ul class="schedule-list">
                    <li>
                        <div class="schedule-time">20/07</div>
                        <div class="event-name">Convocatoria</div>
                    </li>
                    <li>
                        <div class="schedule-time">30/07 - 10/10</div>
                        <div class="event-name">Recepción de resúmenes</div>
                    </li>
                    <li>
                        <div class="schedule-time">01/08 - 20/10</div>
                        <div class="event-name">Inscripción (resúmenes aceptados)</div>
                    </li>
                    <li>
                        <div class="schedule-time">30/07 - 15/10</div>
                        <div class="event-name">Evaluación de resúmenes</div>
                    </li>
                    <li>
                        <div class="schedule-time">12/10 - 27/09</div>
                        <div class="event-name">Notificación de aceptación de resúmenes</div>
                    </li>
                    <li>
                        <div class="schedule-time">01/09 - 30/10</div>
                        <div class="event-name">Recepción de resúmenes extendidos (*)</div>
                    </li>
                    <li>
                        <div class="schedule-time">25/10</div>
                        <div class="event-name">Divulgación del programa (**)</div>
                    </li>
                    <li>
                        <div class="schedule-time">06/11 - 08/11</div>
                        <div class="event-name">Realización de Congreso COPIOS 2017</div>
                    </li>
                </ul>
                <p>(*) Los resúmenes extendidos seleccionados serán publicados en la revista peruana de
                    investigación de operaciones y sistemas</p>
                <p>(**) Para que aparecer en el programa de COPIOS se requiere inscripción al congreso y 
                    resumen extendido.</p>
            </div>
        </div>
    </div>
</section>
@stop