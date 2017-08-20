<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta http-equiv="X-Clacks-Overhead" content="GNU Terry Pratchett" />

        <link rel="stylesheet" href="{{ $page->cache_bust('/css/main.css') }}">
        <link rel="shortcut-icon" href="{{ $page->cache_bust('/favicon.ico') }}">

        <title>{{ $page->myName }}</title>
    </head>
    <body>
        @include('_partials.nav')
        @yield('body')
        @include('_partials.footer')
    </body>
</html>
