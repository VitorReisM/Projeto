<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project name - @yield('title')</title>

        @include("layouts.header")
    </head>

    <body>
        @include("layouts.navbar")

        <div class="container">

            @yield('content')
        </div>
    </body>

    <footer>
        @include("layouts.footer")
    </footer>
</html>
