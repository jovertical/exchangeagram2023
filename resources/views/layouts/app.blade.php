<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased" x-data="{ showNewPostModal: false }">
    <div class="min-h-screen bg-white">
        @include('layouts.navigation')

        <!-- Page Content -->
        <main>
            <div class="mx-auto h-full w-full max-w-5xl py-8">
                {{ $slot }}
            </div>
        </main>
    </div>

    <!-- Page modals -->
    <x-new-post />

    @yield('scripts')
</body>

</html>
