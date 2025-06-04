<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
