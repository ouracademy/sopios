<header class="navbar navbar-static-top navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" 
        data-toggle="collapse" data-target="#main-nav" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="navbar-collapse collapse" id="main-nav">
      <ul class="nav navbar-nav">
        <li>
          <a href="{{ url('copios/2017') }}" class="{{ Request::is('copios/2017') ? 'active' : '' }}">Inicio</a>
        </li>
        <li><a href="{{ url('copios/2017/que-es') }}" class="{{ Request::is('copios/2017/que-es') ? 'active' : '' }}">COPIOS 2017</a></li>
        <li><a href="{{ url('copios/2017/programa') }}" class="{{ Request::is('copios/2017/programa') ? 'active' : '' }}">Programa</a></li>
        <li><a href="{{ url('copios/2017/entrega-de-trabajos') }}" class="{{ Request::is('copios/2017/entrega-de-trabajos') ? 'active' : '' }}">Entrega de trabajos</a></li>
      </ul>
    </div>
  </div>
</header>