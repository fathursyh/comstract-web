<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/icon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Comstract</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @if (Request::is('/'))
        @include('components.splide')
    @endif
</head>

<body class="overflow-y-visible">
    {{-- NAVBAR --}}
    @include('components.nav.navbar')
    <main class="min-h-[24.2rem]">
        <div class="container pt-22 max-h-max max-w-full 2xl:px-36">
            @yield('content')
        </div>
    </main>

    @if (Str::substr($_SERVER['REQUEST_URI'], 1, 12) !== 'data-peserta')
        @include('components.footer')
    @endif

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/index.js') }}"></script>

    <script>
        document.querySelector('[data-modal-toggle="search-modal"]').addEventListener('click', function() {
            setTimeout(function() {
                document.getElementById('search').focus();
            }, 100); // Adjust the timeout as needed
        });
    </script>

    @if (Request::is('/'))
        {{-- DATA CHART MASUKIN SINI --}}
        @include('components.utility.chart')
    @endif
</body>

</html>
