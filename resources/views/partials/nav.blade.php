<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="{{ route('posts.index') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
            </ul>
            @guest
                <div class="auth-actions">
                {{-- <x-ui.btn /> --}}
                <x-ui.btn href="{{ route('login') }}" color="success" size="sm">Login</x-ui.btn>
                <x-ui.btn href="{{ route('register') }}" color="secondary" size="sm">Register</x-ui.btn>
            </div>
            @endguest
            @auth
                <span class="fw-bold mx-3">Hi, {{ auth()->user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST">
                    <x-ui.btn type="submit" color="danger" size="sm">Logout</x-ui.btn>
                </form>
            @endauth
        </div>
    </div>
</nav>