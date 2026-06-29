@extends('layouts.app')

@section('title', 'Register')

@section('content')

<div class="auth-page">

    <div class="auth-card">

        <div class="auth-logo">
            ELHASH.<span>GG</span>
        </div>

        <h1>Create Account</h1>

        <form method="POST" action="{{ route('register') }}">

            @csrf

            <label>Name</label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                required
                autofocus>

            @error('name')
                <small>{{ $message }}</small>
            @enderror

            <label>Email</label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required>

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

            <label>Confirm Password</label>

            <input
                type="password"
                name="password_confirmation"
                required>

            <button
                type="submit"
                class="auth-btn">

                Create Account

            </button>

        </form>

        <div class="auth-links">

            <a href="{{ route('login') }}">
                Already have an account? Login
            </a>

        </div>

    </div>

</div>

@endsection