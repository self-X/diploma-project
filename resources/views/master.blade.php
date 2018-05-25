<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>

        @include('layouts.navbar')

        <main class="py-1">
            @yield('content')
        </main>

        <footer class="container py-5">
            @include('layouts.footer')
        </footer>

        <script src="{{ asset('js/app.js') }}"></script>


    </body>
</html>
