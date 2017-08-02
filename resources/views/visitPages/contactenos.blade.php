@extends('visitPages.layout')
@section('title', 'Contáctenos')
@section('description', 'Contactácte con SOPIOS y resuelve tus preguntas')
@section('content')
 	<div class="space"></div>
 	 <div class="space"></div>
 	
	<!-- Contact Section -->
	<div id="contact" class="text-center">
		<div class="container">
			<div class="section-title center">
				<h2>Contáctenos</h2>
				<hr/>
			</div>
			<div class="col-md-8 col-md-offset-2">
				@if(Session::has('message'))
			    <div class="alert alert-info">
			      {{Session::get('message')}}
			    </div>
				@endif
				
				<ul>
				  @foreach($errors->all() as $error)
				    <li>{{ $error }}</li>
				  @endforeach
				</ul>
				
				<h3>Déjenos un mensaje</h3>
				
				{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" name="name" id="name" class="form-control"
									placeholder="Nombre" required="required" value="{{ old('name') }}"/>
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input name ="email" type="email" id="email" class="form-control"
									placeholder="Email" required="required" value="{{ old('email') }}"/>
								<p class="help-block text-danger"></p>
							</div>
						</div>
					</div>
					<div class="form-group">
						<textarea name="message" id="message" class="form-control"
							rows="4" placeholder="Mensaje" required="required" value="{{ old('message') }}"></textarea>
						<p class="help-block text-danger"></p>
					</div>
					<div id="success"></div>
					<button type="submit" name="submit" class="btn btn-default">Enviar
						mensaje</button>
				{!! Form::close() !!}
				   
						<div class="space"></div><br/><br/>
						<p>Puede contactarnos en:</p>
						<div class="space"></div>
						<div class="col-md-8 col-md-offset-2">
							<div class="col-md-4">
								<i class="fa fa-map-marker fa-2x"></i>
								<p>
									Lima<br/> Perú, Lima
								</p>
							</div>
							<div class="col-md-4">
								<i class="fa fa-envelope-o fa-2x"></i>
								<p>info@sopios.com</p>
							</div>
							<div class="col-md-4">
								<i class="fa fa-phone fa-2x"></i>
								<p>+1 800 123 1234</p>
							</div>
							<hr/>
							<div class="clearfix"></div>
						</div>
			</div>
		</div>
	</div>
@stop