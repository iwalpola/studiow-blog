<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function store(Request $request){

    	$this->validate($request, [
	        'contactName' => 'required',
	        'contactEmail' => 'required|email',
	        'contactMessage' => 'required',
	    ]);

    	\Mail::send('emails.contact',
	        array(
	            'name' => $request->get('contactName'),
	            'email' => $request->get('contactEmail'),
	            'subject' => $request->get('contactSubject'),
	            'user_message' => $request->get('contactMessage')
	        ), function($message)
	    {
	        $message->from('iwalpola@studiow.cf');
	        $message->to('iwalpola@studiow.cf', 'Admin')->subject('StudioW New Mail');
	    });

    	return response()->json(['msg' => 'OK']);
    }
}
