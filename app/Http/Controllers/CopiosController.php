<?php namespace App\Http\Controllers;

class CopiosController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}

	
	public function index()
	{ 
		return view('copios.index');
	}

	public function about() {
		//TODO: replace with a proper object, not use hash
		$areas = collect([
			[
			'name' => 'Aplicaciones a la ingeniería de producción de bienes y servicios',
			'subAreas' => [
				[ 'name' => 'Gestión de la Cadena de Suministro' ],
				[ 'name' => 'Gestión del Rendimiento' ],
				[ 'name' => 'Logística' ],
				[ 'name' => 'Planificación y Programación de Procesos Industriales' ],
				[ 'name' => 'Programación de Proyectos' ],
				[ 'name' => 'Sistemas de Inventarios y Producción' ],
				[ 'name' => 'Transporte (pasajeros, carga)' ],
			],
			],
			[
			'name' => 'Aplicaciones a la economía y negocios',
			'subAreas' => [
				[ 'name' => 'Comercio Electrónico' ],
				[ 'name' => 'Modelación Financiera' ],
				[ 'name' => 'Modelos Económicos' ]
			]
			],
			[
			'name' => 'Aplicaciones específicas de optimización',
			'subAreas' => [
				[ 'name' => 'Análisis Envolvente de Datos' ],
				[ 'name' => 'Corte y Empaque' ],
				[ 'name' => 'Localización de Instalaciones' ],
				[ 'name' => 'Problema de Asignación' ],
				[ 'name' => 'Programación de Horarios' ],
				[ 'name' => 'Ruteo de Vehículos' ]
			]
			],
			[
			'name' => 'Aplicaciones estadísticas',
			'subAreas' => [
				[ 'name' => 'Control de Calidad' ],
				[ 'name' => 'Estadística descriptiva e inferencial' ],
				[ 'name' => 'Minería de Datos' ],
				[ 'name' => 'Pronósticos' ]
			]
			],
			[
			'name' => 'Gestión del Conocimiento',
			'subAreas' => [
				[ 'name' => 'Sistemas de Aplicación del Conocimiento' ],
				[ 'name' => 'Sistemas de Captura del Conocimiento' ],
				[ 'name' => 'Sistemas de Compartición del Conocimiento' ],
				[ 'name' => 'Sistemas de Descubrimiento del Conocimiento' ]
			]
			],
			[
			'name' => 'Métodos computacionales',
			'subAreas' => [
				[ 'name' => 'Heurísticas' ],
				[ 'name' => 'Inteligencia Artificial' ],
				[ 'name' => 'Metaheurísticas' ],
				[ 'name' => 'Redes Neuronales' ]
			]
			],
			[
			'name' => 'Optimización matemática',
			'subAreas' => [
				[ 'name' => 'Grafos y Redes' ],
				[ 'name' => 'Optimización lineal' ],
				[ 'name' => 'Optimización no lineal' ],
				[ 'name' => 'Programación Dinámica' ],
				[ 'name' => 'Programación Estocástica' ],
				[ 'name' => 'Programación Lineal Entera' ],
				[ 'name' => 'Programación Multicriterio' ]
			]
			],
			[
			'name' => 'Toma de decisiones',
			'subAreas' => [
				[ 'name' => 'Análisis de Decisión' ],
				[ 'name' => 'Procesos de análisis Jerárquico' ],
				[ 'name' => 'Sistemas de Soporte a la toma Decisión' ],
				[ 'name' => 'Teoría de Juegos' ]
			]
			],
			[ 'name' => 'Procesos Estocásticos' ],
			[ 'name' => 'Simulación' ]
		]);

		return view('copios.about')->withAreas($areas);
	}

	public function callForContributions() {
		return view('copios.callForContributions');
	}
}
