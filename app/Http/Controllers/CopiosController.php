<?php namespace App\Http\Controllers;

use App\Copios\Day;
use App\Copios\Slot;
use Carbon\Carbon;

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
				[ 'name' => 'Optimización combinatoria' ],
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

	public function schedule() {
		$days = [
			new Day('Lunes 6', [
				new Slot('7:30-8:00', 'Registro'),
				new Slot('8:00-8:30', 'Inauguración'),
				new Slot('8:30-9:30', 'Plenaria 1'),
				new Slot('9:30-10:30', 'Descanso (Café)'),
				new Slot('10:30-11:30', 'Sesiones Técnicas'),
				new Slot('11:30-12:30', 'Sesiones Técnicas'),
				new Slot('14:30-15:30', 'Sesiones Técnicas'),
				new Slot('15:30-16:30', 'Sesiones Técnicas  1'),
				new Slot('16:30-17:30', 'Descanso (Café)'),
				new Slot('17:30-18:30', 'Plenaria 2')
			]),
			new Day('Martes 7', [
				new Slot('8:30-9:30', 'Plenaria 3'),
				new Slot('9:30-10:30', 'Descanso (Café)'),
				new Slot('10:30-11:30', 'Sesiones Técnicas'),
				new Slot('11:30-12:30', 'Sesiones Técnicas'),
				new Slot('14:30-15:30', 'Mesa Redonda '),
				new Slot('15:30-16:30', 'Mesa Redonda 2'),
				new Slot('16:30-17:30', 'Descanso (Café)'),
				new Slot('17:30-18:30', 'Plenaria 4'),
				new Slot('19:00-21:00', 'Asamblea SOPIOS')
			]),
			new Day('Miercoles 8', [
				new Slot('8:30-9:30', 'Sesiones Técnicas'),
				new Slot('9:30-10:30', 'Sesiones Técnicas'),
				new Slot('10:30-11:30', 'Sesiones Técnicas'),
				new Slot('11:30-12:30', 'Clausura')
			])
		];

		return view('copios.schedule')->withDays($days);
	}

	public function callForContributions() {
		return view('copios.callForContributions');
	}
}
