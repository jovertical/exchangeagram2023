<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <body class="font-sans antialiased">
        <div class="w-full min-h-screen h-full bg-white py-12">
            <div class="max-w-sm mx-auto">
                <!-- Form container -->
                <div class="bg-white border py-8 px-12">
                    <!-- App Logo -->
                    <div class="flex items-center justify-center py-6">
                        <img
                            class="h-12 w-auto"
                            src="{{ Vite::asset('resources/images/logo.png') }}"
                            alt="{{ config('app.name') }}"
                        >
                    </div>
                    <!--/. App Logo -->

                    <div class="mt-4">
                        {{ $slot }}
                    </div>
                </div>
                <!--/. Form container -->

                <!-- Form footer -->
                <div class="mt-4 py-8 px-12 bg-white border">
                    {{ $footer }}
                </div>
                <!--/. Form footer -->
            </div>
        </div>
    </body>
</html>
