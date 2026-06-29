<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="auth-page">

<div class="auth-background"></div>

<div class="auth-container">

    <a
        href="{{ route('home') }}"
        class="auth-logo">

        ELHASH<span>.GG</span>

    </a>

    <div class="auth-card">

        {{ $slot }}

    </div>

</div>

</body>

</html>
