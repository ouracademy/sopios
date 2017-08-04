@extends('copios.layout.index')
@section('content')
@include('copios.fragments.what-is')
<section id="areas">
  <div class="container-fluid">
    <h2>Áreas temáticas</h2>
    <div class="row">
      @foreach ($areas->chunk(3) as $chunk)
      <div class="col-xs-12 col-sm-4">
        @foreach ($chunk as $area)
        <div class="area">
          <h5 class="title-red">{{$area['name']}}</h5>
          @if(array_key_exists('subAreas', $area))
          <ul>
            @foreach($area['subAreas'] as $subarea)
              <li>{{$subarea['name']}}</li>
            @endforeach
          </ul>
          @endif
        </div>
        @endforeach
      </div>
      @endforeach
    </div>
  </div>
</section>
<section>
  <div class="container-fluid">
    <h2>Organización</h2>
    <h3 class="title-red">Comité organizador</h3>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <a href="" class="hotel-name">Presidente</a>
          <div class="hotel-distance"><strong>Maria Alvarez Rivas</strong> - UNMSM</div>
          <div class="hotel-class">malvarezr1@unmsdm.edu.pe</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <a href="" class="hotel-name">Secretaria</a>
          <div class="hotel-distance"><strong>Alicia Riojas Cañari</strong> - UNMSM</div>
          <div class="hotel-class">Aliriojas@hotmail.com</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <a href="" class="hotel-name">Director Administrativo Financiero</a>
          <div class="hotel-distance"><strong>Sonia Castro Ynfantes</strong> - UNMSM</div>
          <div class="hotel-class">scastroy@gmail.com</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <a href="" class="hotel-name">Director de Eventos e Imagen institucional</a>
          <div class="hotel-distance"><strong>José Carlos Oré</strong></div>
          <div class="hotel-class">jcorel@hotmail.es</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <a href="" class="hotel-name">Director de Investigación y Desarrollo</a>
          <div class="hotel-distance"><strong>Rocio Gutierrez Curo</strong></div>
          <div class="hotel-class">rociosgutierrez@gmail.com</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <a href="" class="hotel-name">Director de publicaciones y auspicios</a>
          <div class="hotel-distance"><strong>Ricardo Lopez Guevara</strong></div>
        </div>
      </div>
    </div>
    <h3 class="title-red">Comité científico</h3>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <a href="" class="hotel-name">Directora de Programa</a>
          <div class="hotel-distance"><strong>Dr. Rosa Delgadillo</strong> - UNMSM</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dr. Luis Acosta</strong> - Universidad Técnica Federico Santa María – Chile</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dra. Maria Alvarez</strong> - UNMSM</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dr. David Mauricio</strong> - UNMSM</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dra. Lidia Angulo Meza</strong> - Universidad Federal Fluminense - Brasil</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dra. Carmen Belderrain</strong> - Instituto Tecnológico de Aeronáutica - Brasil</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dra. Gladys Maquera</strong> - Universidad Peruana Unión</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dr. Miguel Mejía</strong> - Pontificia Universidad Católica del Perú</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dr. Luis Oré</strong> - UNMSM</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dr. Erick Papa</strong> - UNMSM</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dr. Luis Torres</strong> - Universidad Federal Fluminense - Brasil</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dr. Alfredo Tang</strong> - Universidad Estadual do Norte Fluminense - Brasil</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dra. Marcela González</strong> - Universidad de Talca – Chile</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dr. Luis Salazar</strong> - Universidad Nacional de San Agustín</div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="hotel-description">
          <div class="hotel-distance"><strong>Dr. Marcos Baca López</strong> - Universidad Privada del Norte - Perú</div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop