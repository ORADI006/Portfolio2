@extends('layouts.app')

@section('title', 'Projets')

@section('content')
<main class="main-content">
    <section class="page-header reveal">
        <h1 class="page-title">projets <span class="gold-text">récents</span></h1>
        <div class="title-underline"></div>
        <p class="header-sub">inspirés par une approche GitHub · chaque carte brille</p>
    </section>

    <!-- grille type repo github -->
    <section class="projects-grid reveal">
        @forelse($projects as $project)
        <div class="project-card glass-card glow-hover">
            <div class="project-header">
                <i class="fas {{ $project->icon }} gold-icon"></i>
                <h3>{{ $project->title }}</h3>
            </div>
            <p class="project-desc">{{ $project->description }}</p>
            <div class="project-tech">
                @php
                    $technologies = explode(',', $project->technologies);
                @endphp
                @foreach($technologies as $tech)
                    <span>{{ trim($tech) }}</span>
                @endforeach
            </div>
            <div class="project-footer">
                <span class="project-stars"><i class="far fa-star"></i> {{ $project->stars }}</span>
                <a href="{{ $project->link }}" class="project-link"><i class="fas fa-external-link-alt"></i> Voir</a>
            </div>
        </div>
        @empty
        <p>Aucun projet trouvé.</p>
        @endforelse
    </section>

    <!-- call to action subtil -->
    <div class="more-projects reveal">
        <a href="#" class="btn-glass btn-gold-glow"><i class="fab fa-github"></i> Plus sur GitHub</a>
    </div>
</main>
@endsection