<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>COPIOS 2017</title>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <meta name="description" content="COPIOS 2017">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="COPIOS 2017">
  <meta name="twitter:description" content="COPIOS es el congreso peruano más importante de investigación operativa y sistemas respaldados por SOPIOS, ahora en su VII edición.">

  <meta property="og:description" content="COPIOS es el congreso peruano más importante de investigación operativa y sistemas respaldados por SOPIOS, ahora en su VII edición.">
  <meta property="og:url" content="http://www.sopios.com/copios2017">
  <meta property="og:title" content="COPIOS 2017">

  <!-- TODO put all in angular-cli.json -->
  <link href="{{asset('packages/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('copios/packages/bootstrap-theme.min.css') }}">

  <link rel="stylesheet" type="text/css" href="{{asset('copios/css/styles.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('copios/css/fonts.css')}}">
</head>
<body>
    <div id="app">
        @include('copios.layout.header')
        @yield('content')
        <section class="footer">
            <div class="container-fluid">
                <div class="legal">
                    <small>© COPIOS. All rights reserved.</small>
                    <small>Contáctanos en <a href="mailto:copios@sopios.org.pe">copios@sopios.org.pe</a></small>
                </div>
                <a href="http://businessideasgroup.com.pe/" class="credits">
                    <div class="developed-by-logo"></div>
                    <p>Desarrollado por</p>
                </a>
            </div>
        </section>
    </div>
    <script type="text/javascript" src="{{asset('packages/jquery/jquery-1.11.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('packages/bootstrap/bootstrap.min.js')}}"></script>
</body>
</html>