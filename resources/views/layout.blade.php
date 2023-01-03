<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/themes/'.$theme.'.css')}}">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
        <title>@yield('title')</title>
    </head>

    <body class="app-wrapper load-show">
        <div class="layout">

            @section('sidebar')
                <div class="phone:hidden">
                    @include('includes.side-nav')
                </div>

                @include('includes.side-nav-mobile')
            @show

            <div class="content flex flex-row w-full my-7 phone:my-12" id="contend">
                <div class="absolute cursor-pointer top-2 right-9 phone:top-0  phone:right-0 z-50">
                    <button id="exit-button" class="secondary">Exit</button>
                </div>

                @yield('content')
            </div>
        </div>

        <div id="load-page" class="fixed">
            <div class="preload-dual"></div>
        </div>

        @include('modals.question')
        @include('modals.response-dialog');
        @include('modals.leave-dialog')
    </body>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script src="{{ asset("js/modals/question.dialog.js") }}"></script>
    <script src="{{ asset("js/pages/layout.js") }}"></script>
    <script src="{{ asset('js/app.js')}}" defer></script>
    <script src="{{ asset('js/navbar/navbar.js')}}"></script>
    <script src="{{ asset('js/navbar/navbar-mobile.js')}}"></script>

    @yield('scripts')

</html>
