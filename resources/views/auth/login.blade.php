@extends('layouts.empty')
@section('title', 'Login')
@section('content')
    <div class="container">
      <div class="d-flex flex-column align-items-center justify-content-center mt-5">
        <h1 class="my-3">Login Page</h1>
        <form action="{{ route('login') }}" method="POST">
          <x-ui.input type="text" name="email">Email Address</x-ui.input>
          <x-ui.input type="password" name="password">Password</x-ui.input>
          <x-ui.btn type="submit">Login</x-ui.btn>
      </form>
      </div>
    </div>
@endsection
