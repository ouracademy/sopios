<nav id="main-navbar" class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{route('index')}}">
			<img alt="SOPIOS" src="{{'img/logo-sopios.png'}}">
			</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
			<li class="{{ Request::is('/') ? 'active' : '' }}">
				<a href="{{url('/')}}">Inicio</a>
			</li>
			<li class="{{ Request::is('nosotros') ? 'active' : '' }}">
				<a href="{{route('nosotros')}}">Nosotros</a>
			</li>
			<li class="{{ Request::is('eventos') ? 'active' : '' }}">
				<a href="{{route('eventos')}}">Eventos</a>
			</li>
			<li><a href="">Socios</a></li>
			<li class="{{ Request::is('unete') ? 'active' : '' }}">
				<a href="{{route('unete')}}">Quiero ser socio</a>
			</li>
			</ul>
		</div>
	</div>
</nav>