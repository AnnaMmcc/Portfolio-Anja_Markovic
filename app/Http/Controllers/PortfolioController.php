<?php

namespace App\Http\Controllers;

use App\Services\BrevoMailService;
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

        $htmlContent = "<h2>Nova poruka sa portfolio sajta</h2>
                    <p><strong>Name:</strong> {$podaci['name']}</p>
                    <p><strong>Email:</strong> {$podaci['email']}</p>
                    <p><strong>Message:</strong> {$podaci['message']}</p>";

        $brevo = new BrevoMailService();
        $brevo->sendEmail(env('MAIL_FROM_ADDRESS'), "Anja Marković", "Nova poruka sa portfolio sajta", $htmlContent);

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
