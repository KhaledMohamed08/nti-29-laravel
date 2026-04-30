@include('partials.head')

@include('partials.nav')

<div class="container">
    @if (session('success'))
        <div class="alert alert-success mt-2" role="alert">
            {{ session('success') }}
        </div>
    @endif
    
    <main>
        @yield('content')
    </main>
</div>

@include('partials.foot')