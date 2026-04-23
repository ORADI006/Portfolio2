<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = \App\Models\Project::all();
        return view('portfolio', compact('projects'));
        
    }
    
}