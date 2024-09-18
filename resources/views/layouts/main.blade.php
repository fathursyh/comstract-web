<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/icon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comstract</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @if (Request::is('/'))
        @include('components.splide')
    @endif
</head>

<body>
    {{-- NAVBAR --}}
    @include('components.nav.navbar')

    <div class="container pt-22 max-h-max max-w-full 2xl:px-36">
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/index.js') }}"></script>
    
    @if (Request::is('/'))
        {{-- DATA CHART MASUKIN SINI --}}
        @include('components.utility.chart')
    @endif
</body>

</html>
