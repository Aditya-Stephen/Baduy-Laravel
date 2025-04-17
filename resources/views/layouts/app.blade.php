<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Bootstrap 3.3.7 CSS (untuk navbar legacy) -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

        <!-- Styles -->
        @livewireStyles
         <!-- Custom CSS untuk navbar -->
         <style>
            /* Navbar Custom untuk custom */
            .custom-navbar {
                position: sticky;
                background-color: #021526 !important;
                display: block;
                left: 0;
                padding: 8px 40px !important;
                right: 0;
                top: 0;
                width: 100%;
                -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.30);
                -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.30);
                box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.30);
                z-index: 111;
            }

            .custom-navbar .navbar-default {
                background-color: #021526;
                border: 0;
                border-radius: 0px;
            }

            .custom-navbar .navbar,
            .custom-navbar .navbar-nav,
            .custom-navbar .navbar-default,
            .custom-navbar .nav {
                margin-bottom: 0 !important;
            }

            .custom-navbar .navbar-brand {
                padding: 2px 15px 0 15px;
                height: auto;
            }

            .custom-navbar .navbar-default .navbar-nav > li > a {
                border-radius: 0;
                color: #E2E2B6;
                font-size: 15px;
                font-style: normal;
                font-weight: 600;
                text-transform: capitalize;
                background-color: transparent;
                padding: 15px 15px;
            }

            .custom-navbar .navbar-default .navbar-nav > li a.active {
                color: #E2E2B6;
                box-shadow: 0 10px 20px 0 rgba(5, 16, 44, .15);
                border-radius: 25px 0px 25px 0px;
                background: #03346E;
            }

            .custom-navbar .navbar-default .navbar-nav > li:hover a,
            .custom-navbar .navbar-default .navbar-nav > li:focus a {
                color: #E2E2B6;
                box-shadow: 0 10px 20px 0 rgba(5, 16, 44, .15);
                border-radius: 25px 0px 25px 0px;
                background: #03346E;
            }

            .custom-navbar .navbar-right > li {
                margin-top: 2px;
                -webkit-transition: all .3s ease-in-out;
                -moz-transition: all .3s ease-in-out;
                -ms-transition: all .3s ease-in-out;
                -o-transition: all .3s ease-in-out;
                transition: all .3s ease-in-out;
            }

            .custom-navbar .navbar-right > li > a {
                padding-bottom: 10px;
                padding-top: 10px;
                z-index: 1000;
            }

            /* Untuk gambar logo kecil */
            .gambar-kecil {
                height: 40px; /* Sesuaikan sesuai kebutuhan */
                width: auto;
                transition: all 0.3s ease;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <!-- Navbar Custom -->
        <nav class="navbar navbar-expand-lg custom-navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/logobadui1.webp') }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNavbar">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/aboutUs') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/marketplace') }}">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/artikel') }}">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    
        <x-banner />
        
        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
     </body>
</html>
