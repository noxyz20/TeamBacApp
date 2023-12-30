<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @vite('resources/sass/app.scss')
    </head>
    <body class="font-clash">
        <div class="w-full py-12 px-24 flex items-center">
            <h1 class="text-3xl font-bold text-white w-full">TeamBac App</h1>
            <div class="flex flex-row-reverse w-full">
                @include('app.components.nav')
            </div>
        </div>
        <div id="app">
            @yield('app')
        </div>
    </body>
    @vite('resources/js/app.js')
</html>

