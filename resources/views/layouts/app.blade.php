<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MoonWalkers') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts and Style-->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite(['resources/sass/hero.scss', 'resources/js/tracker.js'])
    @vite(['resources/sass/navbar.scss'])
</head>
<body>
    <!-- <img src="/space2.jpg" alt=""/> -->
        @include('layouts.nav')

        @yield('content')
    <!-- @if(!auth()->user() || auth()->user()->role != "administrator")
        @include('layouts.footer')
    @endif -->
</body>
</html>
