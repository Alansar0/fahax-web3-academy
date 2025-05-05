



<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Parents/Home</title>
    <!-- Material Icons -->
    <!-- Replace Material Icons CDN -->
    <link rel="stylesheet" href="{{ asset('css/material-icons.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Font Awesome -->
    <!-- Replace Font Awesome CDN -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css']) --}}
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        @include('layouts.side_bar')
        <!-- Main Content -->
        <x-main-content></x-main-content>
    </div>
    <!-- JavaScript -->
    {{-- @vite(['resources/js/app.js', 'resources/js/carousel.js', 'resources/js/tabs.js']) --}}
    <script src="{{ asset('js/carousel.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
    <script src="{{ asset('js/switchView.js') }}"></script>
    <!-- JavaScript for Sidebar -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const sidebar = document.getElementById("sidebar");
        const toggleButton = document.getElementById("sidebarToggle");

        toggleButton.addEventListener("click", function () {
            sidebar.classList.toggle("active");
        });

        document.addEventListener("click", function (event) {
            if (!sidebar.contains(event.target) && !toggleButton.contains(event.target)) {
                sidebar.classList.remove("active");
            }
        });
    });
</script>
</body>

</html>
