<div class="navbar-fixed-top">
		<nav class="navbar navbar-custom">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-main-collapse">
						<i class="fa fa-bars"></i>
					</button>
					<div class="logo">
						<a href="{{route('index')}}">SOPIOS</a>
						<hr/>
						<p>Sociedad Peruana de Investigación Operativa y Sistemas</p>
					</div>
				</div>
				<div id="page-scroll">
					<a href="#page-top" class="page-scroll"><span
						class="icon-arrow-up"></span></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div
					class="collapse navbar-collapse navbar-right navbar-main-collapse">
					<ul class="nav navbar-nav menu-principal">
						<!-- Hidden li included to remove active class from about link when scrolled up past about section -->
						<li class="hidden"><a href="#page-top"></a></li>
						<li><a class="opt_m" href="{{route('index')}}">Inicio</a></li>
						<li><a class="opt_m" href="{{route('nosotros')}}">Nosotros</a></li>
<!-- 						<li><a class="opt_m" href="publicaciones.html">Publicaciones</a></li> -->
						<li><a class="opt_m" href="{{route('eventos')}}">Eventos</a></li>
						<li><a class="opt_m" href="">Socios</a></li>
						<li><a class="opt_m" href="{{route('unete')}}">Quiero ser socio</a></li>
						<li><a class="opt_m" href="{{route('contactenos')}}">Contáctenos</a></li>
						<!--<div class="login">-->
						<!--	@if (Auth::guest())-->
						<!--		<li><a class="opt_m" href="{{ url('/auth/login') }}">Login</a></li>-->
						<!--	@else-->
						<!--		<li class="dropdown">-->
						<!--			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>-->
						<!--			<ul class="dropdown-menu" role="menu">-->
						<!--				<li><a href="{{ url('/auth/logout') }}">Logout</a></li>-->
						<!--			</ul>-->
						<!--		</li>-->
						<!--	@endif-->
						<!--</div>-->
<!-- 						<div class="redes-sociales"> -->
<!-- 							<ul> -->
<!-- 								<li><a href="#"><i class="fa fa-facebook"></i></a></li> -->
<!-- 							</ul> -->
<!-- 						</div> -->
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</nav>
	</div>