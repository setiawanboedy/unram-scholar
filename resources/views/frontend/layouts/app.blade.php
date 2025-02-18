<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Unram Scholar</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
        @stack('styles')
        @livewireStyles
    </head>
    <body class="{{$bgWhite ?? 'bg-white'}}">
        <div class="w-full bg-white">
            @include('frontend.includes.header')
        
        </div>
        @yield('content')
        @include('frontend.includes.footer')

        @stack('scripts')
        @livewireScripts
    </body>
</html>
