<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        <div class="flex min-h-screen items-center justify-center bg-white">
            <div class="text-center">
                <h1 class="text-xl font-bold">Exchangeagram</h1>

                <div class="space-x-1.5">
                    <a class="text-blue-600" href="{{ route('login') }}">Login</a>
                    <a class="text-blue-600" href="{{ route('register') }}">Register</a>
                </div>
            </div>
        </div>
    </body>
</html>
