<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PortfolioController extends Controller
{

    public function show()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::to('anja.poslovni.srb@gmail.com')->send(new ContactMessage($data));

        return back()->with('success', 'Poruka je uspešno poslata!');
    }

    public function projects()
    {
        $jsonPath = resource_path('data/projects.json');
        if(!file_exists($jsonPath))
        {
            abort(500, 'Fajl sa projektima ne postoji');
        }
        $projects = json_decode(file_get_contents($jsonPath), true);

        return view('projects', compact('projects'));
    }
}
