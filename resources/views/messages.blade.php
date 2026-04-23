@extends('layouts.app')

@section('title', 'Messages')

@section('content')
<main class="main-content">
    <section class="page-header reveal">
        <h1 class="page-title">messages <span class="gold-text">reçus</span></h1>
        <div class="title-underline"></div>
    </section>

    <section class="messages-section reveal">
        <div class="messages-table glass-card">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($messages as $message)
                    <tr>
                        <td>{{ $message->id }}</td>
                        <td>{{ $message->name }}</td>
                        <td>{{ $message->email }}</td>
                        <td>{{ Str::limit($message->message, 50) }}</td>
                        <td>{{ $message->created_at->format('d/m/Y H:i') }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center">Aucun message trouvé.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('welcome') }}" class="btn-glass btn-gold-glow">
                <span>Retour à l'accueil</span>
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
    </section>
</main>
@endsection