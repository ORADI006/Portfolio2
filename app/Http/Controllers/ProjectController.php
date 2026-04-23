<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create()
    {
        return view('projects.create');
    }
    public function index()
    {
        $projects = Project::all();
        return view('projects', compact('projects'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|url',
            'icon' => 'nullable|string|max:50',
            'technologies' => 'nullable|string',
            'stars' => 'nullable|integer',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Project::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'image_url' => $imagePath,
            'link' => $validatedData['link'],
            'icon' => $validatedData['icon'],
            'technologies' => $validatedData['technologies'],
            'stars' => $validatedData['stars']?? 0,
        ]);

        return redirect()->route('welcome')->with('success', 'Projet ajouté avec succès !');
    }
}