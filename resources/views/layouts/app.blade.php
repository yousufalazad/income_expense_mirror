<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Title -->
    <title>Income Expeence Mirror</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="images/fevicon.png">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <!-- Font-awesome/6.1.1 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Main CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <!-- Top Navbar -->
        @include('navbar.app_top_navbar')

        <div class="container-fluid px-0">
            <div class="row flex-nowrap">
                @auth
                    <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                        <!-- Left Navbar -->
                        @include('navbar.app_left_navbar')
                    </div>
                @endauth
                <div class="col min-vh-100">
                    <!-- Use All Main Content -->
                    <main class="py-3">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
