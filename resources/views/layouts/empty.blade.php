@include('partials.head')

<div class="container">
    @if (session('success'))
        <div class="alert alert-success mt-2" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger mt-2" role="alert">
            {{ session('error') }}
        </div>
    @endif
    <main>
        @yield('content')
    </main>
</div>

@include('partials.foot')
