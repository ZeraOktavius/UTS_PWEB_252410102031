<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'KOSOY - Kos Management System')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    @if (!request()->routeIs('login'))
        @include('components.navbar')
    @endif

    <main>
        @yield('content')
    </main>

    @if (!request()->routeIs('login'))
        @include('components.footer')
    @endif

</body>

</html>
