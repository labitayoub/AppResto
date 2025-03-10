{{-- @extends('layouts.auth') --}}

@section('content')
<div class="container">
    <h2>Login</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required autofocus>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
    <div class="mt-3">
        <a href="{{ route('password.request') }}">Forgot Your Password?</a>
    </div>
    <div class="mt-2">
        <a href="{{ route('register') }}">Don't have an account? Register</a>
    </div>
</div>
@endsection