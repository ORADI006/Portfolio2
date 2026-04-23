<nav class="navbar glass">
    <div class="nav-container">
        <div class="nav-logo">
            <a href="{{ route('welcome') }}" class="logo-text">#XV<span class="gold-dot">.</span></a>
        </div>
        <ul class="nav-links">
            <li><a href="{{ route('welcome') }}" class="nav-link {{ request()->routeIs('welcome') ? 'active' : '' }}">Accueil</a></li>
            <li><a href="{{ route('skills') }}" class="nav-link {{ request()->routeIs('skills') ? 'active' : '' }}">Compétences</a></li>
            <li><a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">Projets</a></li>
            <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
        </ul>
        <div class="nav-toggle" id="navToggle"><i class="fas fa-bars"></i></div>
    </div>
</nav>