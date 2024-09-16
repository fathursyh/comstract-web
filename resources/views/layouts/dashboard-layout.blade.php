<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/icon.png') }}">
    <title>Comstract - Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  {{-- DASHBOARD NAV --}}
  @include('components.nav-dashboard.dashboard_navbar')
  
  {{-- SIDE CONTENT --}}
  <div class="p-4 sm:ml-64">
    @yield('content')
  </div>

  <script src="{{ asset('js/dash.js') }}"></script>
</body>
</html>