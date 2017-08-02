@extends('visitPages.layout')
@section('title', 'Unete')
@section('description', 'Unete y se parte de nosotros, hazte socio, subscribete a SOPIOS')
@section('content')
	<div class="space"></div>
	<div class="space"></div>
	<div id="about" class="requisitos">
		<div class="container">
			<div class="section-title text-center center">
				<h2>Requisitos</h2>
				<hr/>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="about-text">
						<ul>
							<li>-DNI válido y vigente</li>
							<li>-Haber estudiado la carrera de Investigaciones de
								operaciones, Ingeniería de Sistemas o afines</li>
							<li>-Tener carta de recomendación de socio dentro de la
								sociedad</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 text-center">
					<img src="img/requisitos2.jpg" class="img-responsive" />
				</div>
			</div>
		</div>
	</div>
	
	<div id="about" class="beneficios">
		<div class="container">
			<div class="section-title text-center center">
				<h2>Beneficios</h2>
				<hr/>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="about-text">
						<ul>
							<li>-Pertenecer a la Sociedad con con membresia de 1 año</li>
							<li>-Acceder al 50% de descuento por asistencia a cualquier
						evento que realize la socios dentro de sus días hábiles de
						menbresia</li>
							<li>-Acceso a las publicaciones de investigaciones de
						la sociedad</li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 text-center">
					<img src="img/beneficios.jpg" class="img-responsive" />
				</div>
			</div>
		</div>
	</div>

	
	<div class="space"></div>

	<div id="pasos" class="text-center">
		<div class="container">
			<div class="section-title center">
				<h2>Hágase socio en 6 pasos</h2>
				<hr />
			</div>
			<div class="space"></div>
			<div class="row">
				<div class="col-md-4 col-sm-4 service">
					<div class="numero">
						<p>1</p>
					</div>
					<h4>Brindar datos personales</h4>
					<h5>(Nombres, Apellidos, N° DNI, Dirección, Teléfono, fecha de
						nacimiento)</h5>
				</div>
				<div class="col-md-3 col-sm-4 service">
					<div class="numero">
						<p>2</p>
					</div>
					<h4>Brindar datos académicos</h4>
					<h5>(Centros de estudios primarios, secundarios y
						universitarios, carrera profesional y grados de estudios)</h5>
				</div>
				<div class="col-md-4 col-sm-4 service">
					<div class="numero">
						<p>3</p>
					</div>
					<h4>Recomendación de socio Sopios</h4>
					<h5>Generalmente es la emisión de una carta de recomendación</h5>
				</div>
			</div>
			<div class="space"></div>
			<div class="row" >
				<div class="col-md-4 col-sm-4 service">
					<div class="numero">
						<p>4</p>
					</div>
					<h4>Verificación y Validación</h4>
					<h5>La sociedad verifica y valida la información brindada por
						el usuario.</h5>
				</div>
				<div class="col-md-3 col-sm-4 service">
					<div class="numero">
						<p>5</p>
					</div>
					<h4>Realizar pago</h4>
					<h5>El postulante deberá abonar a la cuenta de la SOPIOS el
						derecho de suscripción</h5>
				</div>
				<div class="col-md-4 col-sm-4 service">
					<div class="numero">
						<p>6</p>
					</div>
					<h4>Subir voucher</h4>
					<h5>Por último el postulante deberá subir el voucher
						correspondiente al abono por derecho de suscripción</h5>
				</div>
			</div>
		</div>
		<div class="space"></div>

		<p class="text-center">
			<a class="btn btn-primary" href="#">Suscribirme</a>
		</p>
	</div>

@stop