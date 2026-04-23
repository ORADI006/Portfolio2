<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::latest()->get();
        return view('contact.messages', compact('messages'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Enregistrer le message dans la base de données
        Message::create($validatedData);

        // Retourner les données saisies à la vue
        return back()->withInput()->with('success', 'Message envoyé avec succès !');
    }
}