@extends('layouts.empty')
@section('title', 'Register')
@section('content')
    <div class="container d-flex align-items-center justify-content-center mt-5">
        <div class="d-flex flex-column align-items-center justify-content-center mt-5">
            <h1 class="my-3">Register Page</h1>
            <form action="{{ route('register') }}" method="POST">
                <x-ui.input name="name">User Name</x-ui.input>
                <x-ui.input type="email" name="email">Email Address</x-ui.input>
                <x-ui.input type="password" name="password">Password</x-ui.input>
                <x-ui.btn type="submit">Register</x-ui.btn>
            </form>
        </div>
    </div>
@endsection
