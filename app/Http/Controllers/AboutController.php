<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use Mail;

class AboutController extends Controller
{
    public function create()
    {
        return view('visitPages.contactenos');
    }
    
    /**
     *  Email the contact request
     * @param ContactMeRequest $request
     * @return Redirect
    */
    public function store(ContactFormRequest $request)
    {
        $data = $request->only('name', 'email');
        $data['messageLines'] = explode("\n", $request->get('message'));
       
        Mail::send('emails.contact', $data, function ($message) use ($data) {
          $message->subject('SOPIOS Contact Form: '.$data['name'])
                  ->to('administrador@sopios.com')
                  ->replyTo($data['email']);
        });
    
        return back()->withMessage("Gracias por su mensaje. Ha sido enviado.");
    }
}
