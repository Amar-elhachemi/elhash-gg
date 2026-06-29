@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="auth-page">

    <div class="auth-card">

        <div class="auth-logo">
            ELHASH.<span>GG</span>
        </div>

        <h1>Login</h1>

        <form method="POST" action="{{ route('login') }}">

            @csrf

            <label>Email</label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus>

            @error('email')
                <small>{{ $message }}</small>
            @enderror

            <label>Password</label>

            <input
                type="password"
                name="password"
                required>

            @error('password')
                <small>{{ $message }}</small>
            @enderror

            <label style="display:flex;align-items:center;gap:10px;margin-bottom:20px;">

                <input
                    type="checkbox"
                    name="remember"
                    style="width:auto;">

                Remember me

            </label>

            <button
                type="submit"
                class="auth-btn">

                Login

            </button>

        </form>

        <div class="auth-links">

            @if (Route::has('password.request'))

                <a href="{{ route('password.request') }}">
                    Forgot Password?
                </a>

                <br><br>

            @endif

            <a href="{{ route('register') }}">
                Don't have an account? Register
            </a>

        </div>

    </div>

</div>

@endsection