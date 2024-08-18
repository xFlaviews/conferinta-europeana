<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W4C9GVCRXV"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-W4C9GVCRXV');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="@yield('meta_description', config('app.name'))">

    @yield('meta')

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/regular/style.css" />
    <!-- Fonts -->

    <!-- Styles -->
    @stack('before-styles')

    @vite(['resources/sass/app.scss'])

    @stack('after-styles')
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#1b264f">
    <meta name="msapplication-TileColor" content="#1b264f">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    @include('frontend.includes.header')


    <main data-bs-spy="scroll">
        @yield('content')
    </main>

    @include('frontend.includes.footer')

    @stack('before-scripts')
    @vite(['resources/js/app.js'])
    @stack('after-scripts')
</body>

</html>
