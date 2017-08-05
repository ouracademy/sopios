@extends('visitPages.layout')
@section('title', 'Nosotros')
@section('description', 'La Sociedad Peruana de Investigación Operativa y de Sistemas(SOPIOS) está dedicada a difundir
                                  el desarrollo de la ciencia, tecnología e innovación, teniendo como compromiso principal 
                                  el desarrollo del país.')
@section('content')

	<!-- About Section -->
	<div id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="section-title center">
						<h2>Misión</h2>
						<hr />
					</div>
					<div class="about-text">
						<p>Somos una comunidad de académicos y profesionales que se
							interesa en el desarrollo de la ciencia, tecnología e innovación,
							teniendo como compromiso principal el desarrollo del país.</p>
						<br/>
						<br/>
					</div>
				<img src="img/hio3.jpg" class="img-responsive" alt="" />
				</div>

				<div class="col-md-6">
				
					<div class="section-title center">
						<h2>Visión</h2>
						<hr />
					</div>
					<div class="about-text">
						<p>Ser una sociedad académica, profesional líder e innovadora
							que impulse el desarrollo de de ciencia y tecnologías en
							investigación de operaciones, sistemas y áreas afines. Ser una
							sociedad que proponga respuestas científicas u tecnológicas a los
							grandes problemas de las diferentes áreas que afronta nuestra
							sociedad. Ser una sociedad de soporte para un conocimiento real
							de las áreas de actuación de la Investigación de operaciones y
							sistemas.</p>
					</div>
					<img src="img/vision.jpg" class="img-responsive" alt="" />
				</div>
				<!-- <p class="text-center">
					<a class="btn btn-primary" href="#"><i class="fa fa-download"></i>
					Descargar Misión y Visión</a>
				</p> -->
			</div>
		</div>
	</div>
	<!-- Services Section -->
	<div id="services" class="text-center">
		<div class="container">
			<div class="section-title center">
				<h2>NUESTROS DIRECTIVOS</h2>
				<hr/>
			</div>
			<div class="space"></div>
			<div class="row">
				<div class="col-md-3 col-sm-6 service">
					<img src="img/foto1.jpg" class="image-responsive center-block img-circle"/>
					<h5>Presidente</h5>
					<h4>MAURICIO SANCHEZ DAVID SANTOS</h4>
					<p>Doctor en Ciencias en Ingeniería de Sistemas y Computación
					 (1991-1994), y Magister en Ciencias en Matemática Aplicada
					  (1989-1991) por la Universidad Federal de Rio de Janeiro, br/asil.</p>
					 <a>dms_research@yahoo.com</a>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_m.png" class="image-responsive center-block img-circle"/>
					<h5>Vicepresidente</h5>
					<h4>JOSÉ HERNÁNDEZ VALLEJOS</h4>
					<p>Docente principal en Universidad Nacional San Agustín</p>
					<a>jose.hernandez.vallejos@gmail.com</a>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/atocheWilmer.jpg" class="image-responsive center-block img-circle"/>
					<h5>Secretario</h5>
					<h4>WILMER ATOCHE DIAZ</h4>
					<p>Docente en la Universidad Pontificie Universidad Católica.</p>
					 <a>watoche@pucp.edu.pe</a>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_f.jpg" class="image-responsive center-block img-circle"/>
					<h5>Director Administrativo-Financiero</h5>
					<h4>GIOVANA VALVERDE AYALA</h4>
					<p>Docente de la Universidad Nacional Mayor de San Marcos.</p>
					<a>gmvalverde@yahoo.com</a>
				</div>
			</div>
			<div class="space"></div>
			<br/><br/>
			<div class="row">
				<div class="col-md-3 col-sm-6 service">
					<img src="img/default_profile_f.jpg" class="image-responsive center-block img-circle"/>
					<h5>Director de Eventos e Imagen institucional</h5>
					<h4>SONIA CASTRO YNFANTES</h4>
					<p>Magister de la facultad de Ciencias Matemáticas de la Universidad Nacional Mayor de San Marcos</p>
					 <a>scastroy@unmsm.edu.pe</a>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/orestescb.jpg"  class="image-responsive center-block img-circle"/>
					<h5>Director de Investigación y Desarrollo</h5>
					<h4>ORESTES CACHAY BOZA</h4>
					<p>Dr. en la facultad de Ingeniería Industrial en la Universidad Nacional Mayor de San Marcos</p>
					<a>orestescachay@yahoo.es</a>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/ulloaRubio.jpg"  class="image-responsive center-block img-circle"/>
					<h5>Director de Publicaciones y Educación</h5>
					<h4>BERTHA ULLOA RUBIO</h4>
					<p>Dra. en la facultad de Ingeniería de Sistemas de la UCV</p>
					 <a>bulloa@ucv.edu.pe</a>
				</div>
				<div class="col-md-3 col-sm-6 service">
					<img src="img/wilerad.jpg" class="image-responsive center-block img-circle"/>
					<h5>Primer Vocal</h5>
					<h4>WILER PONCE BENITES</h4>
					<p>Docente Universitario en Universidad Nacional Mayor de San Marcos.</p>
					<a>wiler.ponce@industrial.unmsm.pe</a>
				</div>
			</div>
			<div class="space"></div>
			<br/><br/>
			<div class="row">
				<div class="centered ">
					<img src="img/default_profile_f.jpg"  class="image-responsive center-block img-circle"/>
					<h5>Segundo Vocal</h5>
					<h4>GLADYS MELGAREJO</h4>
					<p>Docente en la facultad de Ciencias Matemáticas de la Universidad Nacional Mayor de San Marcos.</p>
					<!--<a>notiene@gmail.com</a>-->
				</div>
			</div>
		</div>
	</div>
	<!-- Executive Section -->

	<!-- Resume Section -->
	<div id="resume" class="text-center">
		<div class="container">
			<div class="section-title center">
				<h2>Nuestros Inicios</h2>
				<hr/>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<ul class="timeline">
						<li>
							<div class="timeline-image">
								<h4>
									Ene 1969<br/> - <br/> Feb 1969
								</h4>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>En la escuela de Investigación de Operaciones</h4>
									<h4 class="subheading"></h4>
								</div>
								<div class="timeline-body">
									<p>El Dr. Eugen Blum, profesor de la facultad de matemáticas de la
										Universidad Mayor de San Marcos promueve la creación de una sociedad de investigadores 			operativos conjuntamente con los docentes de la escuela.</p>
								</div>
							</div>
							<img src="img/hio11.jpg"  class="image-responsive center-block"/>
						</li>
						<li class="timeline-inverted">
							<div class="timeline-image">
								<h4>
									Ene 2006 <br/> - <br/> Feb 2006
								</h4>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>Peru parte del latinoamerica y el mundo</h4>
									<h4 class="subheading">Sede de CLAIO</h4>
								</div>
								<div class="timeline-body">
									<p>En el año 2006, David Mauricio Sanchez, profesor de la
										facultad de Ingeniería de Sistemas de la Universidad Nacional
										Mayor de San Marcos(UNMSM) en el Congreso Latino
										Iberoamericano de Investigacion de Operaciones (CLAIO), bajo
										la organizacion de la Asociacion Latino Iberoamericana de
										Investigacion Operaciones (ALIO), propuso que Peru se sede de
										la XIII Escuela de Verano LatinoAmericana de Investigacion
										Operativa(XIII ELAVIO)</p>
								</div>
							</div>
							<img src="img/hio3.jpg"  class="image-responsive center-block"/>

						</li>
						<li>
							<div class="timeline-image">
								<h4>
									Feb 2008
								</h4>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>Primer ELAVIO en Perú</h4>
									<h4 class="subheading">Escuela de Verano XIII Latinoamericano de Investigación Operativa-Perú</h4>
								</div>
								<div class="timeline-body">
									<p>Se realizó la primera escuela de verano en Investigación de
									Operaciones en el Perú, que tuvo lugar en el distrito de Chosica. El XIII
									ELAVIO fue organizado por dos universidades: la Universidad Nacional
									Mayor de San Marcos y la Universidad Inca Garcilaso de la Vega.</p>
								</div>
							</div>
							<img src="img/elavioh.jpg" class="image-responsive center-block"/>

						</li>
						<li class="timeline-inverted">
							<div class="timeline-image">
								<h4>
									Oct 2008
								</h4>
							</div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h4>Creación de la Sociedad Peruana de Investigación Operativa y Sistemas</h4>
									<h4 class="subheading">Oficialmente SOPIOS</h4>
								</div>
								<div class="timeline-body">
									<p>En 25 de octubre 2008 oficialmente se creó la Sociedad Peruana
									de Investigación y Sistemas de Operaciones (SOPIOS), en una asamblea
									 general, llevado a cabo en la Facultad de Ingeniería de Sistemas
									  de la Universidad Nacional Mayor de San Marcos.</p>
								</div>
							</div>
							<img src="img/hio5.jpg"  class="image-responsive center-block"/>

						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@stop