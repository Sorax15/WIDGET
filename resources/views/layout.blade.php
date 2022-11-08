<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('scss/app.css') }}">

    <title>App Name - @yield('title')</title>
</head>

<body class="theme-navy-blue">
<div class="app-wrapper">

    <div class="flex flex-row justify-start">
        @section('sidebar')
            @include('includes.side-nav')
        @show

        <div class="content flex flex-row justify-center w-full my-7">
            @yield('content')
        </div>
    </div>
</div>
</body>

<script src="{{ asset('js/app.js')}}"></script>
</html>
