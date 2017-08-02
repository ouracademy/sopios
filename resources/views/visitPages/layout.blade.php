<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>@yield('title') - SOPIOS</title>
	<meta name="description" content="@yield('description')" />
	<meta property="og:image" content="{{asset('img/logo-sopios.png')}}" />
	@include('visitPages.fragments.headTag')
	
	
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<div class="contenedor-principal">
		@include('visitPages.fragments.bodyHeader')
		<div class="contenedor-cuerpo">
			@yield('content')
		</div>
		@include('visitPages.fragments.footer')
	</div>
	@include('visitPages.fragments.scripts')

</body>
</html>