<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">

    <!-- Vite Styles -->
    @vite('resources/css/app.css')
    @livewireStyles
</head>
<body class="font-sans antialiased">
    <div id="app">
        <main>
          @yield('content')
        </main>
    </div>

    <!-- Vite Scripts -->
    @vite('resources/js/app.js')
    @livewireScripts
</body>
</html>
