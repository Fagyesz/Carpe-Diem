<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Validate the request data, process the form, etc.

        $request->validate([

            'message' => 'required|min:10'

        ]);



        $name = $request->user()->name;
        $username = $request->user()->username;
        $email = $request->user()->email;
        $data=[
            'name' => $name,
            'username' => $username,
            'email' => $email,
            'message' => $request -> message
        ];

        Mail::to('99c901ee@gmail.com')->send(new ContactMail($data));


        // Redirect the user or display a success message
        return redirect('/');//->with('message', 'Email sent succesfully!');
        toastr()->success('Email sent succesfully!');
    }

    public function showContactPage()
    {
        return view('emails.contactPage');
    }


}
