@extends('copios.layout.index')
@section('title', 'Inicio')
@section('description', 
'Bienvenido a COPIOS 2017, el congreso peruano más importante de investigación operativa 
 y sistemas respaldado por SOPIOS')
  
@section('content')
<div id="header-bg" class="header header-bg-alt">
  <div class="header-bg-image-alt"></div>
  <div class="container-fluid pos-rel">
    <div class="main-headline">
      <h1>COPIOS 2017</h1>
      <h3>Noviembre 6-8, 2017 | Lima</h3>
      <!-- <div class="lead mb2">
        Eficiencia, Calidad e Innovación para la competitividad</div> -->
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
          <div class="speaker-item"><img src="{{asset('copios/img/carmen-belderrain.jpg')}}" class="speaker-img">
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
          <div class="speaker-item"><img src="{{asset('copios/img/alberto-gabay.jpg')}}" class="speaker-img">
            <h4><a href="">Dr. Alberto Gabay</a></h4>
            <h5>UFRJ, Brasil</h5>
          </div>
        </div>
        <div class="clearfix visible-xs"></div>
        <div class="clearfix visible-sm"></div>
        <div class="col-xs-12 col-sm-6 col-md-3">
          <div class="speaker-item"><img src="{{asset('copios/img/jaime-miranda.jpg')}}" class="speaker-img">
            <h4><a href="">Dr. Jaime Miranda</a></h4>
            <h5>Presidente de Asociación Latino Iberoamericana de Investigación Operativa - ALIO</h5>
            <h5>Universidad de Chile</h5>
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
    <p>Para realizar el pago, deposité a la Cta UNMSM 000270016684 
      bajo el concepto de pago 144-325 en el Banco Financiero según
      el monto de su categoría;</p>
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
              <td>Socio SOPIOS</td>
              <td>60</td>
              <td>90</td>
            </tr>
            <tr>
              <td>Estudiantes de posgrado (**)</td>
              <td>80</td>
              <td>120</td>
            </tr>
            <tr>
              <td>Estudiantes de pregrado (**)</td>
              <td>30</td>
              <td>40</td>
            </tr>
            <tr>
              <td>Público general</td>
              <td>100</td>
              <td>150</td>
            </tr>
          </tbody>
        </table>
        <p><small>(*) Antes del 30/09</small></p>
        <p><small>(**) Deberán presentar su carnet universitario o algún documento que acredite su condición</small></p>
        <p>El pago de la inscripción otorga el derecho de asistir a todas las sesiones técnicas y plenarias, mesas redondas.</p>
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