<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	public function __construct()
	{
		$this->middleware('guest');
	}

	
	public function index()
	{ 
		return view('visitPages.index');
	}
	
	
	public function eventosCopios2015()
    {
        return view('visitPages.copios2015');
    }
    
    public function eventos()
    {
        return view('visitPages.eventos');
    }
    
    public function nosotros()
    {
        return view('visitPages.nosotros');
    }
    
    public function unete()
    {
        return view('visitPages.unete');
    }
}
