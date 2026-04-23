@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<main class="main-content">
    <section class="page-header reveal">
        <h1 class="page-title">me <span class="gold-text">contacter</span></h1>
        <div class="title-underline"></div>
        <p class="header-sub">pour des collaborations, questions ou opportunités</p>
    </section>

    <section class="contact-section reveal">
        <div class="contact-form glass-card">
            <form action="{{ route('messages.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Nom</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" required>{{ old('message') }}</textarea>
                </div>
                <button type="submit" class="btn-glass btn-gold-glow">
                    <span>Envoyer le message</span>
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>

        @if(session('success'))
            <div class="alert">
                {{ session('success') }}
                @if(old('name') || old('email') || old('message'))
                    <div class="submitted-data">
                        <h3>Données soumises :</h3>
                        <p><strong>Nom :</strong> {{ old('name') }}</p>
                        <p><strong>Email :</strong> {{ old('email') }}</p>
                        <p><strong>Message :</strong> {{ old('message') }}</p>
                    </div>
                @endif
            </div>
        @endif
    </section>
</main>

<style>
    .alert {
        padding: 15px;
        margin: 20px 0;
        border-radius: 5px;
        background: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
    }
    .submitted-data {
        margin-top: 15px;
        padding: 10px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 5px;
    }
    .submitted-data p {
        margin: 5px 0;
    }
</style>
@endsection
