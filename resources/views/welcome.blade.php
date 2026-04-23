@extends('layouts.app')

@section('content')
<header>
    <img src="{{ asset('images/1772031940336.jpg') }}" alt="Photo de profil">
    <h1>Ingénieur en Intelligence Artificielle</h1>
</header>

<section>
    <h2>À propos de moi</h2>
    <p>
        Je suis ingénieur en intelligence artificielle, expérimenté dans le domaine de la robotique.
        Je suis passionné par le design et les systèmes embarqués, et j’aime relever des défis
        technologiques pour créer des solutions innovantes.
    </p>
</section>

<section>
    <h2>Compétences</h2>
    <ul>
        <li>Programmation : Python, C++, JavaScript</li>
        <li>Apprentissage automatique et deep learning</li>
        <li>Développement web (HTML, CSS, React)</li>
        <li>Systèmes embarqués et IoT</li>
        <li>Conception et modélisation 3D</li>
        <li>Bases de données (SQL, NoSQL)</li>
        <li>Outils de versioning (Git, GitHub)</li>
    </ul>
</section>

<section>
    <h2>Projets</h2>
    @forelse($projects as $project)
        <div class="project-card">
            @if($project->image_url)
                <img src="{{ asset($project->image_url) }}" alt="{{ $project->title }}">
            @endif
            <h3>{{ $project->title }}</h3>
            <p>{{ $project->description }}</p>
            <a href="{{ $project->link }}" class="btn-submit">Voir le projet</a>
        </div>
    @empty
        <p>Aucun projet trouvé.</p>
    @endforelse
</section>

<section>
    <h2>Contact</h2>
    <form action="{{ route('messages.store') }}" method="POST" class="contact-form">
        @csrf
        <div class="form-group">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn-submit">Envoyer</button>
    </form>

    @if(session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif
</section>

<footer>
    <p>© 2026 - Mon Portfolio</p>
</footer>
@endsection