<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="@yield('meta_description', config('app.name'))">

    @yield('meta')


    <!-- Fonts -->

    <!-- Styles -->
    @stack('before-styles')

    @vite(['resources/sass/app.scss'])

    @stack('after-styles')
</head>

<body>
    @include('frontend.includes.header')
    <div class="container-fluid">
        

        <main>
            @yield('content')
        </main>
        
        @include('frontend.includes.footer')
    </div><!--app-->

    @stack('before-scripts')
    @vite(['resources/js/app.js'])
    @stack('after-scripts')
</body>

</html>
