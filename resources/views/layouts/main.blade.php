<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <link href="asset/img/logo.png" rel="icon">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    <!-- Data AoS CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- CSS Animation -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- Navbar --}}
    @extends('partial.navbar')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @extends('partial.footer')
</body>

</html>
