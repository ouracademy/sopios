@extends('copios.layout.index')
@section('title', 'Programa')
@section('description', 
'Programa (schedule) de COPIOS 2017') 
@section('content')
<section id="science-fair">
  <div class="container-fluid">
    <h2>Programa</h2>
    <img src="{{asset('copios/img/schedule.png')}}"/>
    <div>
      <a href="{{asset('copios/Ponencias COPIOS2017.pdf')}}" class="btn btn-primary" download>Ve las ponencias detalladas aquí!</a>
    </div>
  </div>
</section>
@stop