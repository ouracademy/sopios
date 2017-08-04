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

	// public function about() {
	// 	return view('copios.about');
	// }

	public function callForContributions() {
		return view('copios.callForContributions');
	}
}
