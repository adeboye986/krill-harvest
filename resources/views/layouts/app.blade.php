<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name')) | {{ config('app.name') }}</title>

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @stack('head')
    </head>
    <body class="min-h-screen overflow-x-hidden">
        <a
            href="#main-content"
            class="fixed top-3 left-3 z-[100] -translate-y-20 rounded-sm bg-forest px-4 py-3 text-sm font-semibold text-white transition-transform focus:translate-y-0"
        >
            Skip to content
        </a>

        <x-site-header />

        <main id="main-content" class="min-h-[calc(100svh-5rem)]">
            @yield('content')
        </main>

        <x-site-footer />

        @stack('scripts')
    </body>
</html>
