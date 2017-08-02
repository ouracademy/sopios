@extends('visitPages.layout')
@section('content')

	<div>
		<hr />
		<header class="intro3">
			<div class="intro-body">
				<div class="container">
					<div class="intro-text2">
						<div class="section-title center">
							<h2>
								VI CONGRESO PERUANO DE INVESTIGACIÓN DE OPERACIONES Y DE
								SISTEMAS
							</h2><hr />
						</div>
						<img src="img/upc-sm.jpg" alt=""
							class="img-responsive" />
						<p class="img-oculta center" id="fecha">
							<img src="img/titulo-copios.png" alt=""	class="img-responsive" />
						</p>
						
					</div>
				</div>
			</div>
		</header>
	</div>


	<div class="menu-lateral" id="menu-lateral">

		<ul>
			<li><a href="#sede" class="page-scroll">Sede</a></li>
			<li><a href="#comite" class="page-scroll">Comite Organizador</a></li>
			<li><a href="#areast" class="page-scroll">Areas temáticas</a></li>
			<li><a href="#programacion" class="page-scroll">Programación
					General</a></li>
			<li><a href="#ponentes" class="page-scroll">Ponentes</a></li>
			<li><a href="#participar" class="page-scroll">Participar</a></li>
		</ul>
	</div>

	<div id="sede" class="text-center">
		<div class="container">
			<div class="section-title center">
				<h2>Sede COPIOS 2015</h2><hr />
			</div>
			<p>
				La sede del Congreso ha sido otorgada a la <a
					href="http://www.upc.edu.pe">Universidad Peruana de Ciencias
					Aplicadas (UPC)</a>, se llevará a cabo en el Campus de San Miguel,
				ubicado en Av. La Marina 2810, San Miguel, Lima.
			</p>
			<p>
				<b>Mapa</b>
			</p>
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.766803781796!2d-77.09418604203103!3d-12.075577625001785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9652be8f2af%3A0xddac3422fae30ad2!2sUPC+San+Miguel!5e0!3m2!1sen!2spe!4v1446149090018"
				 frameborder="0" style="border: 0"
				allowfullscreen="0"></iframe>
		</div>
	</div>


	<div id="services" class="text-center">
		<div class="container" id="comite">
			<div class="section-title center">
				<h2>COMITÉ ORGANIZADOR</h2>
				<hr />
			</div>
			<div class="space"></div>
			<div class="row">
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_m.png"
						class="image-responsive center-block img-circle" />
					<h5>Presidente</h5>
					<h4>Jorge Antonio Cabrera Berrios (UPC)</h4>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_m.png"
						class="image-responsive center-block img-circle" />
					<h5>Coordinador administrativo (CONCYTEC)</h5>
					<h4>Melva Valverde</h4>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_m.png"
						class="image-responsive center-block img-circle" />
					<h5>Aval Representante legal de SOPIOS</h5>
					<h4>Rosa Delgadillo</h4>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_f.jpg"
						class="image-responsive center-block img-circle" />
					<h5>Coordinación Académica</h5>
					<h4>Rosario del Pilar Villalta Riega</h4>
				</div>
				<div class="space"></div>
				<br /> <br />
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_m.png"
						class="image-responsive center-block img-circle" />
					<h5>Coordinación Administrativo-académico</h5>
					<h4>Javier Eduardo Bermúdez García</h4>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_f.jpg"
						class="image-responsive center-block img-circle" />
					<h5>Coordinador Administrativo</h5>
					<h4>Miguel Shinno Huamanán</h4>
				</div>
			</div>
			<div class="space"></div>
			<br /> <br />
			
		</div>
	</div>
	<div class="space"></div>
	<br /> <br />
	<div id="areast" class="text-center">
		<div class="container">
			<div class="section-title center">
				<h2>Áreas Temáticas</h2><hr />
			</div>
			<p>Las áreas temáticas deseables pero no obligatorias son:</p>
			<ul class="listado2">
				<li>• ADM – Apoyo a Decisión Multicritério (sistemas,
					aplicaciones)</li>
				<li>• AGA – Agricultura y agroindustria</li>
				<li>• CIE – Cluster e incubadora de empresas</li>
				<li>• CVE – Cadena de valor y de exportación (comercio
					electrónico, modelos de negocios)</li>
				<li>• DEA – Análisis envolvente de datos (aplicaciones en
					productividad, competitividad)</li>
				<li>• DGP – Dirección y gestión de la producción (planificación
					y control, MRP, calidad, inventario)</li>
				<li>• EMA – Energía y medio ambiente (petróleo, gas y energía
					no renovable, energía renovable).</li>
				<li>• FRR – Fraude y Riesgos (evasión, suplantación, credit
					scoring)</li>
				<li>• IGC – Ingeniería y Gestión de Conocimientos (métodos,
					modelos, herramientas y aplicaciones)</li>
				<li>• IIT – Investigación, innovación y transferencia
					tecnológica (modelos, casos de éxito, políticas)</li>
				<li>• LOT – Logística y transporte (SCM, distribución, tráfico,
					ruteo)</li>
				<li>• MTA – Metaheurística y aplicaciones (corte y empaque,
					localización, proyectos, horarios)</li>
				<li>• OPC – Optimización Combinatoria (algoritmos, teorías,
					aplicaciones)</li>
				<li>• PIP – Proyectos de inversión pública y gestión de
					proyectos</li>
				<li>• PLP – Planificación y programación (horarios, asignación,
					producción, control)</li>
				<li>• PRM – Programación matemática (lineal, no lineal, no
					suave, dinámica, estocástica, entera)</li>
				<li>• PRB – Programación binivel (teorías, algoritmos,
					aplicaciones, juego humano-máquina)</li>
				<li>• RSG – Redes sociales y grafos (métodos, optimización y
					aplicaciones)</li>
				<li>• SDS – Simulación y dinámica de sistemas (modelos,
					aplicaciones)</li>
				<li>• SOS – Sistemas y operaciones en servicios (salud,
					educación, seguridad)</li>
				<li>• SOC – Softcomputing (teorías, algoritmos, herramientas, y
					aplicaciones)</li>
				<li>• TSI – Telecomunicaciones y sistemas de información</li>
			</ul>
			
		</div>
	</div>
	<div class="space"></div>
	<br /> <br />
	<div id="programacion" class="text-center">
		<div class="container">
			<div class="section-title center">
				<h2>Programación General</h2><hr />
			</div>
			<h3>Programación Preliminar:</h3>
			<p>El congreso se organiza en:</p>
			<ul class="listado2">
				<li> 8 tutoriales</li>
				<li> 4 plenarias</li>
				<li> 3 mesas de debates</li>
				<li> 20 sesiones de ponencias cada una con 4 trabajos.</li>
				<li> 1 sesión de presentación de soluciones comerciales.</li>
				<li> 5 sesiones de trabajos de iniciación científica</li>
			</ul>
			<p class="titulo-centro">
				<b>Cronograma General SOPIOS 2015</b>
			</p>
			<img src="img/cronograma.png" alt=""
				class="img-responsive" />
		</div>
	</div>

	<div id="services" class="text-center">
		<div class="container" id="ponentes">
			<div class="section-title center">
				<h2>Ponentes</h2><hr />
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_m.png"
						class="image-responsive center-block img-circle" />
					<h5>Calidad de software para métodos ágiles</h5>
					<h4>Mg. Gloria Arcos</h4>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_m.png"
						class="image-responsive center-block img-circle" />
					<h5>Redacción de artículos científicos</h5>
					<h4>Dr. David Mauricio</h4>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_m.png"
						class="image-responsive center-block img-circle" />
					<h5>Fábrica de software</h5>
					<h4>Mg. Pedro Castañeda</h4>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_f.jpg"
						class="image-responsive center-block img-circle" />
					<h5>Redes sociales</h5>
					<h4>Mg. Samuel Oporto</h4>
				</div>
				<div class="space"></div>
				<br /> <br />
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_m.png"
						class="image-responsive center-block img-circle" />
					<h5>E-learning adaptativo</h5>
					<h4>Mg. Paul Tocto</h4>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_m.png"
						class="image-responsive center-block img-circle" />
					<h5>Gestión de proyectos de inversión pública</h5>
					<h4>Mg. Johny Álvarez</h4>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_m.png"
						class="image-responsive center-block img-circle" />
					<h5>Emprendimiento y género</h5>
					<h4>Mg. Ezilda Cabrera</h4>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_f.jpg"
						class="image-responsive center-block img-circle" />
					<h5>Energía renovable</h5>
					<h4>Mg. Martin Salazar</h4>
				</div>
				<div class="space"></div>
				<br /> <br />
			</div>
		</div>
	</div>
	<div class="space"></div>
	<br /> <br />
	<div id="participar" class="text-center">
		<div class="container">
			<div class="section-title center">
				<h2>Inscripciones e Inversión</h2><hr />
			</div>
			<img src="img/pagos.png" alt=""
				class="img-responsive" />
			<p>El pago de la inscripción otorga el derecho de asistir a todas
				las sesiones técnicas y plenarias, mesas redondas y a recibir el
				acta del congreso, y certificados.</p>
		</div>
	</div>
</div>

@stop