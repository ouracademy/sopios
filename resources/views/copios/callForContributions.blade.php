@extends('copios.layout.index')
@section('content')
<section id="the-venue">
    <div class="container-fluid">
        <h2>Entrega de trabajos</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h3 class="title-red">Envio de trabajos</h3>
                <p>Antes de enviar su resumen, recuerde que este deberá cumplir las <a href="assets/Bases para envío de trabajos.pdf"
                        target="_blank">Bases para envio de trabajos</a> (use la <a href="assets/Plantilla para resumenes COPIOS-2017.pdf">Plantilla</a>                    como guía) y estar dentro de las <a href="/copios#areas">Áreas temáticas</a>.</p>
                <div class="call-to-action">
                    <a href="https://picatic.com/laracon-us-2017"><button type="button" class="btn btn-primary">Enviar resumen/trabajo</button></a>
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
                        <div class="schedule-time">30/07 - 30/08</div>
                        <div class="event-name">Recepción de los resúmenes</div>
                    </li>
                    <li>
                        <div class="schedule-time">01/08</div>
                        <div class="event-name">Inicio de recepción de solicitudes de inscripción</div>
                    </li>
                    <li>
                        <div class="schedule-time">01/08 - 15/08</div>
                        <div class="event-name">Evaluación de los resúmenes</div>
                    </li>
                    <li>
                        <div class="schedule-time">15/08</div>
                        <div class="event-name">Notificación de aceptación de los resúmenes</div>
                    </li>
                    <li>
                        <div class="schedule-time">30/08 - 30/09</div>
                        <div class="event-name">Recepción de los resúmenes extendidos</div>
                    </li>
                    <li>
                        <div class="schedule-time">05/10</div>
                        <div class="event-name">Conformidad de recepción de los resúmenes extendidos</div>
                    </li>
                    <li>
                        <div class="schedule-time">15/10</div>
                        <div class="event-name">Final de recepción de solicitudes de inscripción</div>
                    </li>
                    <li>
                        <div class="schedule-time">18/10</div>
                        <div class="event-name">Divulgación del programa definitivo del congreso</div>
                    </li>
                    <li>
                        <div class="schedule-time">06/11 - 08/11</div>
                        <div class="event-name">Realización del VII Congreso COPIOS</div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@stop