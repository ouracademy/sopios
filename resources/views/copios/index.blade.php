@extends('copios.layout.index')
@section('content')
<div id="header-bg" class="header header-bg-alt">
  <div class="header-bg-image-alt"></div>
  <div class="container-fluid pos-rel">
    <div class="main-headline">
      <h1>COPIOS 2017</h1>
      <h3>Noviembre 6-8, 2017 | Lima</h3>
      <div class="lead mb2">
        Eficiencia, Calidad e Innovación para la competitividad</div>
      <form class="card">
        <p class="text-center mb1.25"><strong>El congreso peruano más importante</strong> de investigación operativa y sistemas respaldados por ALIO, con
          más de 20 speakers y 4 internacionales!</p>
        <a href="{{url('copios/2017/#payment')}}"><button type="button" class="btn btn-primary btn-lg btn-block">Participa ya!</button></a>
      </form>
    </div>
  </div>
</div>
@include('copios.fragments.what-is')
  <section id="meet-speakers">
  <div class="container-fluid">
    <h2>Speakers</h2>
    <div class="speakers">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="speaker-item"><img src="" class="speaker-img">
            <h4><a href=""></a>Dra. Carmen Belderrain </h4>
            <h5>Instituto Tecnológico de Aeronáutica - ITA, Brasil</h5>
          </div>
        </div>
        <div class="clearfix visible-xs"></div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="speaker-item"><img src="{{asset('copios/img/armando-milioni.jpg')}}" class="speaker-img">
            <h4><a href=""></a>Dr. Armando Milioni </h4>
            <h5>Instituto Tecnológico de Aeronáutica - ITA, Brasil</h5>
          </div>
        </div>
        <div class="clearfix visible-xs"></div>
        <div class="clearfix visible-sm"></div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="speaker-item"><img src="" class="speaker-img">
            <h4><a href="">Dr. Alberto Gabay</a></h4>
            <h5>UFRJ, Brasil</h5>
          </div>
        </div>
        <div class="clearfix visible-xs"></div>
        <div class="clearfix visible-sm"></div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="speaker-item"><img src="{{asset('copios/img/jaime-miranda.jpg')}}" class="speaker-img">
            <h4><a href="">Dr. Jaime Miranda</a></h4>
            <h5>Presidente de Asociación Latino Iberoamericana de Investigación Operativa - ALIO, Universidad de Chile</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <h2>Venue</h2>
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.7549357279145!2d-77.08426708563563!3d-12.06037529145824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c940d42730e9%3A0x38dbe90cb3fd5c18!2sFacultad+de+Ciencias+Matem%C3%A1ticas+-+UNMSM!5e0!3m2!1ses-419!2spe!4v1501528435676"
          width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
<section id="payment">
  <div class="container-fluid">
    <h2>Formas de Pago</h2>
    <p>El pago de la inscripción otorga el derecho de asistir a todas las sesiones técnicas y plenarias, mesas redondas. Se
      entregará el programa del evento, CD con las presentaciones del evento.</p>
    <div class="row">
      <div class="col-xs-12 col-md-12">
        <table class="table payment">
          <thead>
            <tr>
              <td>Categoría</td>
              <td>Pago anticipado * (S/.)</td>
              <td>Pago normal (S/.)</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="3"><strong>Autores y coautores</strong></td>
            </tr>
            <tr>
              <td>Socio SOPIOS</td>
              <td>50</td>
              <td>70</td>
            </tr>
            <tr>
              <td>Estudiantes de posgrado (**)</td>
              <td>40</td>
              <td>60</td>
            </tr>
            <tr>
              <td>No socio</td>
              <td>75</td>
              <td>105</td>
            </tr>
            <tr>
              <td colspan="3"><strong>Público en general</strong></td>
            </tr>
            <tr>
              <td>Participantes</td>
              <td>150</td>
              <td>200</td>
            </tr>
            <tr>
              <td>Estudiantes de pregrado (**)</td>
              <td>25</td>
              <td>35</td>
            </tr>
          </tbody>
        </table>
        <p>(*) Antes del 31 de agosto de 2017</p>
        <p>(**) Los estudiantes universitarios deberán acreditar su condición con carta de presentación del centro de estudios</p>
      </div>
    </div>
  </div>
</section>
<section id="sponsors">
  <div class="container-fluid">
    <h2>Organizadores</h2>
    <div class="row">
      <div class="col-xs-12 col-sm-4">
        <a href="http://matematicas.unmsm.edu.pe/" class="partner-logo-container" target="_blank">
          <div class="partner-logo partner-larajobs"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-4">
        <a href="/" class="partner-logo-container" target="_blank">
          <div class="partner-logo partner-vehikl"></div>
        </a>
      </div>
    </div>
  </div>
</section>
@stop