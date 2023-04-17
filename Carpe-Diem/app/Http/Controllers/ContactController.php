<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the request data, process the form, etc.


        // Redirect the user or display a success message
        return redirect('/')->with('message', 'Email sent succesfully!');
    }

    public function showContactPage() 
    {
        return view('emails.contactPage');
    }


}
