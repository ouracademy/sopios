<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>@yield('title') - COPIOS 2017</title>
  <base href="/">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
	
  <meta name="description" content="@yield('description')" />
  
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="@yield('title') - COPIOS 2017">
  <meta name="twitter:description" content="@yield('description')">

  <meta property="og:title" content="@yield('title') - COPIOS 2017">
  <meta property="og:description" content="@yield('description')">
  <meta property="og:image" content="{{asset('copios/img/logo.png')}}" />

  <link href="{{asset('packages/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{asset('copios/css/styles.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('copios/css/fonts.css')}}">
</head>
<body>
    <div>
        <div id="current-path" display="hidden" data-value="{{Request::path()}}"></div>
        <div id="app-header"></div>
        @yield('content')
        <section class="footer">
            <div class="container-fluid">
                <div class="legal">
                    <small>© COPIOS. All rights reserved.</small>
                    <small>Contáctanos en <a href="mailto:copios@sopios.org.pe">copios@sopios.org.pe</a></small>
                </div>
                <!-- <a href="http://businessideasgroup.com.pe/" class="credits">
                    <div class="developed-by-logo"></div>
                    <p>Desarrollado por</p>
                </a> -->
            </div>
        </section>
    </div>

    
    <script crossorigin src="https://unpkg.com/react@16/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@16/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/react-bootstrap/0.31.5/react-bootstrap.min.js"></script>

    <script type="text/babel">
        const { Navbar, Nav, NavItem } = ReactBootstrap

        const currentPath = document.getElementById('current-path').getAttribute('data-value')
        
        const AppHeader = () => 
            <header>
                <Navbar staticTop fixedTop fluid>
                    <Navbar.Header>
                        <Navbar.Toggle />
                    </Navbar.Header>
                    <Navbar.Collapse>
                        <Nav activeHref={currentPath}>
                            <NavItem href="copios/2017">Inicio</NavItem>
                            <NavItem href="copios/2017/que-es">COPIOS 2017</NavItem>
                            <NavItem href="copios/2017/programa">Programa</NavItem>
                            <NavItem href="copios/2017/llamada-a-trabajos">Llamada a trabajos</NavItem>
                        </Nav>
                    </Navbar.Collapse>
                </Navbar>
            </header>

        ReactDOM.render(
            <AppHeader/>,
            document.getElementById('app-header')
        );
        

    </script>
</body>
</html>