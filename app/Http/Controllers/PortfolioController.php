<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactMeRequest;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PortfolioController extends Controller
{

    public function show()
    {
        return view('contact');
    }

    public function send(ContactMeRequest $request)
    {
        $podaci = $request->only('name', 'email', 'message');


        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMessage($podaci));

        return redirect("/contact")->with('success', 'Sent message. Thank you!');
    }


    public function projects()
    {
        $jsonPath = resource_path('data/projects.json');
        if(!file_exists($jsonPath))
        {
            abort(500, 'File does not exist');
        }
        $projects = json_decode(file_get_contents($jsonPath), true);

        return view('welcome', compact('projects'));
    }
}
