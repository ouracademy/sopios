@extends('visitPages.layout')
@section('content')
		<!-- PAGE -->
		<section id="page">
			<div class="row">
				<div class="container">
					<div class="col-md-12 not-found">
<!-- 						<div class="error">404</div> -->
					</div>
					<div class="col-md-6 not-found">
						<div class="content">
							<h3>¿Te has perdido en la naturaleza?</h3>
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
			</div>
		</section>
		<!--/PAGE -->
@stop