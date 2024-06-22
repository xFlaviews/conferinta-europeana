<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-sidenav-view="{{ $sidenav ?? 'default' }}">

<head>
    <meta charset="utf-8">
    <title>{{ config('app.name') }} | {{ $title ?? '' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="/favicon.ico">

    @yield('css')
    @vite(['resources/sass/backend/app.scss', 'resources/sass/backend/icons.scss'])
    @vite(['resources/js/backend/head.js', 'resources/js/backend/config.js'])
</head>

<body>

    <div class="flex wrapper">

        @include('backend.includes/sidebar')

        <div class="page-content">

            @include('backend.includes/topbar')

            <main class="flex-grow p-6">

                @include('backend.includes/page-title', [
                    'title' => $title,
                    'sub_title' => $sub_title ?? null
                ])

                @yield('content')

                <!-- Back to Top Button -->
                <button data-toggle="back-to-top"
                    class="fixed hidden h-10 w-10 items-center justify-center rounded-full z-10 bottom-20 end-14 p-2.5 bg-primary cursor-pointer shadow-lg text-white">
                    <i class="mgc_arrow_up_line text-lg"></i>
                </button>
            </main>

            @include('backend.includes/footer')

        </div>

    </div>

    <!-- bundle -->
    @yield('script')
    <!-- App js -->
    @yield('script-bottom')

    @vite(['resources/js/backend/app.js'])

</body>


</html>
