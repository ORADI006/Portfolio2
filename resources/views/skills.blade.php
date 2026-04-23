@extends('layouts.app')

@section('title', 'Compétences')

@section('content')
<main class="main-content">
    <section class="page-header reveal">
        <h1 class="page-title">compétences <span class="gold-text">techniques</span></h1>
        <div class="title-underline"></div>
        <p class="header-sub">mon expertise à travers les technologies modernes</p>
    </section>

    <section class="skills-grid reveal">
        <div class="skill-card glass-card card-3d">
            <div class="skill-icon">
                <i class="fas fa-code"></i>
            </div>
            <h3>Développement Web</h3>
            <p>Création de sites web et applications modernes avec HTML, CSS, JavaScript, React, et Laravel.</p>
            <div class="skill-tags">
                <span>HTML5</span>
                <span>CSS3</span>
                <span>JavaScript</span>
                <span>React</span>
                <span>Laravel</span>
            </div>
        </div>

        <div class="skill-card glass-card card-3d">
            <div class="skill-icon">
                <i class="fas fa-mobile-alt"></i>
            </div>
            <h3>Applications Mobiles</h3>
            <p>Développement d'applications mobiles cross-platform avec React Native et Flutter.</p>
            <div class="skill-tags">
                <span>React Native</span>
                <span>Flutter</span>
                <span>Dart</span>
            </div>
        </div>

        <div class="skill-card glass-card card-3d">
            <div class="skill-icon">
                <i class="fas fa-database"></i>
            </div>
            <h3>Bases de Données</h3>
            <p>Conception et gestion de bases de données relationnelles et NoSQL.</p>
            <div class="skill-tags">
                <span>MySQL</span>
                <span>PostgreSQL</span>
                <span>MongoDB</span>
            </div>
        </div>

        <div class="skill-card glass-card card-3d">
            <div class="skill-icon">
                <i class="fas fa-brain"></i>
            </div>
            <h3>Intelligence Artificielle</h3>
            <p>Développement de modèles de machine learning et deep learning.</p>
            <div class="skill-tags">
                <span>Python</span>
                <span>TensorFlow</span>
                <span>PyTorch</span>
            </div>
        </div>

        <div class="skill-card glass-card card-3d">
            <div class="skill-icon">
                <i class="fas fa-server"></i>
            </div>
            <h3>DevOps & Cloud</h3>
            <p>Déploiement et gestion d'infrastructures cloud avec Docker, AWS, et CI/CD.</p>
            <div class="skill-tags">
                <span>Docker</span>
                <span>AWS</span>
                <span>GitHub Actions</span>
            </div>
        </div>

        <div class="skill-card glass-card card-3d">
            <div class="skill-icon">
                <i class="fas fa-gamepad"></i>
            </div>
            <h3>Jeux Vidéo</h3>
            <p>Développement de jeux vidéo avec Unity et Unreal Engine.</p>
            <div class="skill-tags">
                <span>Unity</span>
                <span>C#</span>
                <span>Unreal Engine</span>
            </div>
        </div>
    </section>

    <div class="cta-wrapper">
        <a href="{{ route('projects') }}" class="btn-glass btn-gold-glow large">
            <span>Voir mes projets</span>
            <i class="fas fa-arrow-right"></i>
        </a>
    </div>
</main>
@endsection