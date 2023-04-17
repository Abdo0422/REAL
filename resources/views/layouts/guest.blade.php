<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="https://kit.fontawesome.com/f39be190e5.js" crossorigin="anonymous"></script>
        <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>{{ config('app.name', 'REAL') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
                    @font-face {
            font-family: FFont;
            src: url('./assets/Ramabhadra.ttf');
        }

        @font-face {
            font-family: SFont;
            src: url('./assets/RedHatDisplay.ttf');
        }

        @font-face {
            font-family: TFont;
            src: url('/assets/Inter.ttf');
        }

        @font-face {
            font-family: QuickBold;
            src: url(/assets/Quicksand-Bold.ttf);
        }

        @font-face {
            font-family: QuickRegular;
            src: url(/assets/Quicksand-Regular.ttf);
        }

        </style>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
