<?php

namespace App\Http\Controllers\Directive;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class EventController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
 
    
    public function __construct()
	{
		$this->middleware('auth');
	}
	
    public function index() {  
        
        return view('directive.event.index');   
    }

  
    public function create() {
        return view('directive.event.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    

    public function store(Request $request) {
       
     
    }

    //

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
       
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
