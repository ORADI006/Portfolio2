<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;

// Route pour la page d'accueil
Route::get('/', function () {
    return view('portfolio');
})->name('welcome');

// Route pour la page des compétences
Route::get('/competences', function () {
    return view('skills');
})->name('skills');

// Routes pour les projets
Route::get('/projets', [ProjectController::class, 'index'])->name('projects');
Route::get('/projets/ajouter', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projets', [ProjectController::class, 'store'])->name('projects.store');

// Routes pour le contact
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');

// Route pour afficher les messages (admin)
Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');



