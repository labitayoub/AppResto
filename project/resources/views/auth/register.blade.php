{{-- @extends('layouts.auth') --}}

@section('content')
<div class="container">
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="{{ old('firstname') }}" required>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{ old('lastname') }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div class="form-group mt-3">
            <label class="d-block">Account Type</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="role" id="role_client" value="client" checked>
                <label class="form-check-label" for="role_client">Client</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="role" id="role_artisan" value="artisan">
                <label class="form-check-label" for="role_artisan">Artisan</label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Register</button>
    </form>
</div>
@endsection