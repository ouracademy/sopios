@extends('visitPages.layout')
@section('title', 'Página no encontrada')
@section('content')
	<section id="page">
		<div class="container">
			<div class="col-md-6 not-found">
				<div class="content">
					<h1>¿Te has perdido en la naturaleza?</h1>
					<p>
						Lo sentimos, pero la página que buscas no se ha encontrado<br />
						Intente comprobar la URL para errores.
					</p>
				</div>
			</div>
			<div class="col-md-6">
				<div class="section-title" id="404img">
					<img src="{{asset('img/404img.jpg')}}" alt=""  class="img-responsive"/>
				</div>
			</div>
		</div>
	</section>
@stop