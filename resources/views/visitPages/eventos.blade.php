@extends('visitPages.layout')
@section('title', 'Eventos')
@section('description', 'Congresos, conferencias y talleres de SOPIOS:  Congreso
						 Peruano de Investigación de Operaciones y de Sistemas(COPIOS) 2015
						 COPIOS 2015 - 2009')
@section('content')
	<div><br/><br/><br/><br/><br/><br/><br/>
		<div class="container">
			<div class="section-title text-center center">
				<h2>EVENTOS EN SOPIOS</h2>
				<hr />
				<div class="clearfix"></div>
				<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p> -->
				<!-- la clase web representará  a los congresos (COPIOS) realizados -->
				<!-- la clase app representara a las conferencias realizados -->
				<!-- la clase branding representará a los talleres realizados -->
			</div>
			<div class="categories">
				<ul class="cat">
					<li>
						<ol class="type">
							<li><a href="#" data-filter="*" class="active">Todos</a></li>
							<li><a href="#" data-filter=".web">Congresos</a></li>
							<li><a href="#" data-filter=".app">Conferencias</a></li>
							<li><a href="#" data-filter=".branding">Talleres</a></li>
						</ol>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>

			<div id="copios2009">
				<div class="row">
					<img src="img/events/1.jpg" class="img-responsive" />
				</div>
				<div class="col-md-12 col-lg-12">
					<div class="section-title center">
						<h2>Copios 2009</h2>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<p>
						<b>Institución Sede:</b> Universidad Nacional Mayor de San
						Marcos(UNMSM)
					</p>
					<p>
						<b>Ciudad:</b> Lima
					</p>
				</div>
			</div>

			<div id="copios2010">
				<div class="row">
					<img src="img/events/2.jpg" class="img-responsive" />
				</div>
				<div class="col-md-12 col-lg-12">
					<div class="section-title center">
						<h2>Copios 2010</h2>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<p>
						<b>Institución Sede:</b> Universidad Nacional San Agustín
					</p>
					<p>
						<b>Ciudad:</b> Arequipa
					</p>
				</div>
			</div>
			<div id="copios2011">
				<div class="row">
					<img src="img/events/3.jpg" class="img-responsive" />
				</div>
				<div class="col-md-12 col-lg-12">
					<div class="section-title center">
						<h2>Copios 2011</h2>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<p>
						<b>Institución Sede:</b> Universidad Pontificia Catolíca del
						Perú(PUCP)
					</p>
					<p>
						<b>Ciudad:</b> Lima
					</p>
					<p>
						<b>Enlace:</b> <a href="http://congreso.pucp.edu.pe/copios/" target="_blank">COPIOS 2011</a>
					</p>
				</div>
			</div>

			<div id="copios2013">
				<div class="row">
					<img src="img/events/4.jpg" class="img-responsive" />
				</div>
				<div class="col-md-12 col-lg-12">
					<div class="section-title center">
						<h2>Copios 2013</h2>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<p>
						<b>Institucion Sede:</b> Universidad Privada del Norte
					</p>
					<p>
						<b>Ciudad:</b> Trujillo
					</p>
					<p>
						<b>Enlace:</b> <a href="http://copios2013.upnorte.edu.pe/" target="_blank">COPIOS 2013</a>
					</p>
				</div>
			</div>

			<div id="copios2014">
				<div class="row">
					<img src="img/events/5.jpg" class="img-responsive" />
				</div>
				<div class="col-md-12 col-lg-12">
					<div class="section-title center">
						<h2>Copios 2014</h2>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<p>
						<b>Institucion Sede:</b> Universidad Nacional Mayor de San
						Marcos(UNMSM)
					</p>
					<p>
						<b>Ciudad:</b> Lima
					</p>
				</div>
			</div>

			<div id="copios2015">
				<div class="row">
					<img src="img/events/6.jpg" class="img-responsive" />
				</div>
				<div class="col-md-12 col-lg-12">
					<div class="section-title center">
						<h2>Copios 2015</h2>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<p>
						<b>Institucion Sede:</b> Universidad Peruana de Ciencias Aplicadas
						(UPC)
					</p>
					<p>
						<b>Ciudad:</b> Lima, San Miguel
					</p>
					<p>
						<b>Enlace:</b> <a href="http://www3.upc.edu.pe/html/0/websites/Copios/index.html" target="_blank">COPIOS 2015</a>
					</p>
					<div class="space"></div>
				</div>
			</div>
			
			<div class="row">
				<div class="portfolio-items">
					<div class="col-sm-6 col-md-3 col-lg-3 web">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="/copios/2017">
									<div class="hover-text">
										<h4>Copios 2017</h4>
										<small>Universidad Nacional Mayor de San Marcos<br />
											Lima
										</small>
										<div class="clearfix"></div>
										<i class="fa fa-search"></i>
									</div>
										<img src="" class="img-responsive" 
										alt="Copios 2017" />
								</a>
								<p>Copios 2017, Lima</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 web">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="#copios2015" rel="prettyPhoto">
									<div class="hover-text">
										<h4>Copios 2015</h4>
										<small>Universidad Peruana de Ciencias Aplicadas(UPC)<br />
											Lima
										</small>
										<div class="clearfix"></div>
										<i class="fa fa-search"></i>
									</div>
										<img src="img/events/6.jpg" class="img-responsive" 
										alt="Copios 2015" />
								</a>
								<p>Copios 2015, Lima</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 web">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="#copios2014" rel="prettyPhoto">
									<div class="hover-text">
										<h4>Copios 2014</h4>
										<small>Universidad Nacional Mayor de San Marcos(UNMSM)<br />Lima
										</small>
										<div class="clearfix"></div>
										<i class="fa fa-search"></i>
									</div> <img src="img/events/5.jpg" class="img-responsive"
									alt="Copios 2014" />
								</a>
								<p>Copios 2014, Lima</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 web">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="#copios2013" rel="prettyPhoto">
									<div class="hover-text">
										<h4>Copios 2013</h4>
										<small>Universidad Privada del Norte<br />Trujillo
										</small>
										<div class="clearfix"></div>
										<i class="fa fa-search"></i>
									</div> <img src="img/events/4.jpg" class="img-responsive"
									alt="Copios 2013" />
								</a>
								<p>Copios 2013, Trujillo</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 web">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="#copios2011" rel="prettyPhoto">
									<div class="hover-text">
										<h4>Copios 2011</h4>
										<small>Pontificia Universidad Católica del Perú(PUCP)<br />Lima
										</small>
										<div class="clearfix"></div>
										<i class="fa fa-search"></i>
									</div> <img src="img/events/3.jpg" class="img-responsive"
									alt="Copios 2011" />
								</a>
								<p>Copios 2011, Lima</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 web">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="#copios2010" rel="prettyPhoto">
									<div class="hover-text">
										<h4>Copios 2010</h4>
										<small>Universidad San Agustín <br />Arequipa
										</small>
										<div class="clearfix"></div>
										<i class="fa fa-search"></i>
									</div> <img src="img/events/2.jpg" class="img-responsive"
									alt="Copios 2010" />
								</a>
								<p>Copios 2010, Arequipa</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 col-lg-3 web">
						<div class="portfolio-item">
							<div class="hover-bg">
								<a href="#copios2009" rel="prettyPhoto">
									<div class="hover-text">
										<h4>Copios 2009</h4>
										<small>Universidad Nacional Mayor de San Marcos(UNMSM)<br />
											Lima
										</small>
										<div class="clearfix"></div>
										<i class="fa fa-search"></i>
									</div> <img src="img/events/1.jpg" class="img-responsive"
									alt="Copios 2009" />
								</a>
								<p>Copios 2009, Lima</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop