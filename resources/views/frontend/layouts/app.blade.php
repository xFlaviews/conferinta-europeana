<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
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
