<!doctype html>
<html lang="en" class="scroll-smooth">

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

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;500;700&display=swap');
    </style>

    <link href="../node_modules/lightbox2/dist/css/lightbox.css" rel="stylesheet" />
</head>

<body class="relative">
    {{-- Navbar --}}
    @extends('partial.navbar')

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    @extends('partial.footer')

    {{-- Back to Top --}}
    <a href="#home"
        class="h-14 w-14 bg-orange-600 dark:bg-blue-700 rounded-full bottom-4 right-4 fixed z-[999] p-4 hover:animate-pulse"
        id="#to-top">
        <i class='bx bx-up-arrow text-2xl font-bold text-white -translate-y-1'></i>
    </a>

    {{-- Light Box --}}
    <script src="../node_modules/lightbox2/dist/js/lightbox.js"></script>
</body>

</html>
