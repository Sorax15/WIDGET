<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themes/'.$theme.'.css')}}">
    <title>App Name - @yield('title')</title>
</head>

<body class="app-wrapper">
<div class="flex flex-row justify-start">
    @section('sidebar')
        @include('includes.side-nav')
    @show

    <div class="content flex flex-row justify-center w-full my-7">
        @yield('content')
    </div>
</div>
</body>
<script src="{{ asset('js/app.js')}}" defer></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
@yield('scripts')
</html>
