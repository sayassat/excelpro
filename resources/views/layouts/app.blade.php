<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EXCEL PRO - Қазақ тіліндегі Microsoft Excel видео-курстары</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <style>
        .navbar {
            padding: 0 !important;
            background-color: #1D6F42;
            box-shadow: 2px 2px 6px rgba(29, 111, 66, 0.5);
        }
        .logo {
            height: 60px;
        }
        .logo img {
            display: block;
            height: 100%;
        }
        .navbar .nav-link {
            color: #fff;
        }
        .navbar .nav-link:hover {
            color: #fff;
        }
        .card-header-main {
            font-size: 18px;
            font-weight: bold;
        }
        .card-header-slogan {
            font-size: 16px;
        }
        .card .col-form-label {
            font-size: 16px;
        }
        .card .btn {
            font-size: 16px;
        }
        a.nav-link {
            font-size: 16px;
            font-weight: bold;
        }
        .navbar .navbar-toggler {
            border-color: #fff;
        }
        .navbar .navbar-toggler:focus {
            outline: none;
            box-shadow: 0 0 0 #fff;
        }
        .navbar-toggler-icon {
            background: none;
        }
        .navbar-toggler-icon svg {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <div class="logo"><img src="{{ asset('img/logo.png') }}" alt="Логотип Excel Pro"></div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon">
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_429_11066)"><path d="M3 6.00092H21M3 12.0009H21M3 18.0009H21" stroke="#fff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/></g><defs><clipPath id="clip0_429_11066"><rect width="24" height="24" fill="white" transform="translate(0 0.000915527)"/></clipPath></defs></svg>
                    </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">Кіру</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Тіркелу</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
