<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'elhash.gg')</title>

    @vite([
    'resources/css/app.css',
    'resources/js/app.js'
])

@stack('styles')
</head>
<body>

<nav class="navbar">

    <a href="{{ route('home') }}" class="logo">
    elhash<span>.gg</span>
</a>

<div class="nav-links">
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
       class="{{ request()->routeIs('about') ? 'active' : '' }}">
        About
    </a>
</div>

</nav>

<main>
    @yield('content')
</main>
<x-footer />
@stack('scripts')
</body>
</html>