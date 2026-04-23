@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<main class="main-content">
    <section class="hero reveal">
        <div class="hero-bg"></div>
        <div class="hero-container glass-card hero-card">
            <div class="profile-pic glow-hover">
                <img src="{{ asset('image/oradi.jpg') }}" alt="oradi">
            </div>
            <h1 class="hero-name">ORADI MBIKALE BINANGU</h1>
            <div class="hero-alias">...<span class="gold-text">#XV</span></div>
            <p class="hero-intro gold-glow-text">Bienvenue sur mon portfolio</p>
            <p class="hero-description">Développeur & créateur numérique · innovation immersive & technologies live</p>
            <a href="{{ route('projects') }}" class="btn-glass btn-gold-glow">
                <span>Découvrir mon univers</span>
                <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>

    <!-- petites cartes d'accroche -->
    <section class="features reveal">
        <div class="feature-grid">
            <div class="feature-card glass-card-sm glow-hover">
                <i class="fas fa-code gold-icon"></i>
                <h3>Web & mobile</h3>
                <p>HTML/CSS/JS, Python, intégration futuriste</p>
            </div>
            <div class="feature-card glass-card-sm glow-hover">
                <i class="fas fa-database gold-icon"></i>
                <h3>Données</h3>
                <p>MySQL, modélisation, optimisation</p>
            </div>
            <div class="feature-card glass-card-sm glow-hover">
                <i class="fas fa-lightbulb gold-icon"></i>
                <h3>Innovation</h3>
                <p>Logiciels & expériences immersives</p>
            </div>
            <div class="feature-card glass-card-sm glow-hover">
                <i class="fas fa-video gold-icon"></i>
                <h3>Live prod</h3>
                <p>Streaming, technologies temps réel</p>
            </div>
        </div>
    </section>
</main>
@endsection