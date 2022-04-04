<head>
    <title> E-learning </title>
    <meta charset="UTF-8">
    <meta name="description" content="pictures, laravel">
    <meta name="keywords" content="pictures, laravel">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/style.css"/>
    <link href="https://templates.iqonic.design/metordash/laravel/public/storage/4/carsystem.png" rel="shortcut icon">
    <link rel="stylesheet" href="https://templates.iqonic.design/metordash/laravel/public/css/app.css"/>
    <link rel="stylesheet" href="https://templates.iqonic.design/metordash/laravel/public/assets/css/typography.css"/>
    <link rel="stylesheet" href="https://templates.iqonic.design/metordash/laravel/public/assets/css/style.css"/>
    <link rel="stylesheet" href="https://templates.iqonic.design/metordash/laravel/public/assets/css/custom.css"/>
    <link rel="stylesheet" href="https://templates.iqonic.design/metordash/laravel/public/assets/css/responsive.css"/>
    <link href="https://templates.iqonic.design/metordash/laravel/public/plugin/dataTables/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel='stylesheet' href="https://templates.iqonic.design/metordash/laravel/public/assets/css/slick.css" />
    <link rel='stylesheet' href="https://templates.iqonic.design/metordash/laravel/public/assets/css/slick-theme.css" />
</head>


<div>
    <header class="header-section">
        <div class="container">
            <nav class="main-menu">
                <ul>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item right">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item right">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="right"> Bonjour {{ Auth::user()->firstname }}
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                                <i class="fa fa-power-off"></i>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </nav>
        </div>
    </header>
    <section class="sign-in-page">
        <div class="container p-0">
            <div class="row no-gutters">
                <div class="col-sm-12 align-self-center">
                    <div class="sign-in-from bg-white">
                    @yield('title')
                    </div>
                    @yield('content')
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://templates.iqonic.design/metordash/laravel/public/js/app.js"></script>
<script src="https://templates.iqonic.design/metordash/laravel/public/assets/js/jquery.appear.js"></script>
<script src="https://templates.iqonic.design/metordash/laravel/public/assets/js/countdown.min.js"></script>
<script src="https://templates.iqonic.design/metordash/laravel/public/assets/js/wow.min.js"></script>
<script src="https://templates.iqonic.design/metordash/laravel/public/assets/js/slick.min.js"></script>
<script src="https://templates.iqonic.design/metordash/laravel/public/assets/js/select2.min.js"></script>
<script src="https://templates.iqonic.design/metordash/laravel/public/assets/js/smooth-scrollbar.js "></script>
<script src="https://templates.iqonic.design/metordash/laravel/public/assets/js/lottie.js "></script>
<script src="https://templates.iqonic.design/metordash/laravel/public/assets/js/core.js"></script>
<script src="https://templates.iqonic.design/metordash/laravel/public/assets/js/charts.js"></script>
<script src="https://templates.iqonic.design/metordash/laravel/public/assets/js/animated.js"></script>
<script src="https://templates.iqonic.design/metordash/laravel/public/assets/js/chart-custom.js "></script>
<script src="https://templates.iqonic.design/metordash/laravel/public/assets/js/custom.js"></script>
