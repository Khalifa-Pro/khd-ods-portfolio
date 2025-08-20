<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|string',
            'email'   => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $details = [
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'content' => $request->message,
        ];

        Mail::to("diadhiouababacarpro@gmail.com")->send(new \App\Mail\ContactMail($details));

        return back()->with('success', 'Votre message a bien été envoyé ✅');
    }
}
