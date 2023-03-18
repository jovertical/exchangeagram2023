<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        @vite('resources/css/app.css')
    </head>

    <body class="flex h-screen items-center justify-center">
        <h1 class="text-pink-400">Exhchangeagram 📷</h1>
    </body>
</html>
