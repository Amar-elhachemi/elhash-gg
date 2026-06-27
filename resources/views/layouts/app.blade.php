<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'ELHASH.GG')</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
    @stack('styles')
</head>

<body>
    <x-background />
    
    <div class="particles"></div>

<header class="navbar">

    <div class="container navbar-container">

        <a href="{{ route('home') }}" class="logo">

            <span class="logo-icon">⬢</span>

            <span class="logo-text">
                ELHASH<span>.GG</span>
            </span>

        </a>

        <nav class="nav-links">

    <a href="{{ route('home') }}"
       class="{{ request()->routeIs('home') ? 'active' : '' }}">
        Home
    </a>

    <a href="{{ route('cs2') }}"
       class="{{ request()->routeIs('cs2*') ? 'active' : '' }}">
        CS2
    </a>

    <a href="{{ route('valorant') }}"
       class="{{ request()->routeIs('valorant*') ? 'active' : '' }}">
        Valorant
    </a>

    <a href="{{ route('utilities') }}"
       class="{{ request()->routeIs('utilities*') ? 'active' : '' }}">
        Utilities
    </a>

    <a href="{{ route('about') }}"
       class="{{ request()->routeIs('about*') ? 'active' : '' }}">
        About
    </a>

</nav>

<div class="mobile-menu">

    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('cs2') }}">CS2</a>
    <a href="{{ route('valorant') }}">Valorant</a>
    <a href="{{ route('utilities') }}">Utilities</a>
    <a href="{{ route('about') }}">About</a>

    <a
        href="{{ route('cs2.crosshair') }}"
        class="btn btn-primary">

        Explore Tools →

    </a>

</div>

        <div class="nav-actions">

            <a
                href="{{ route('cs2.crosshair') }}"
                class="btn btn-primary">

                Explore Tools →

            </a>

        </div>

        <button class="mobile-toggle">

            ☰

        </button>

    </div>

</header>

<main>

    @yield('content')

</main>
@stack('scripts')
</body>

</html>