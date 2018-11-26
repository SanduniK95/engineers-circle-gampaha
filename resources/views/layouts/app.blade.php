<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("now-ui-landing/assets/img/apple-icon.png") }}">
    <link rel="icon" type="image/png" href="{{ asset("now-ui-landing/assets/img/favicon.png") }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Engineers' Circle Gampaha</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts and icons -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{ asset("now-ui-landing/assets/css/bootstrap.min.css") }}" rel="stylesheet" />
    <link href="{{ asset("now-ui-landing/assets/css/now-ui-kit.css") }}" rel="stylesheet" />
    <link href="{{ asset("now-ui-landing/assets/css/ecg-style.css") }}" rel="stylesheet" />
</head>
<body class="landing-page sidebar-collapse">
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-success-new fixed-top">
            <div class="container">
                <div class="navbar-translate">
                    <a class="navbar-brand" href="{{ url('/') }}">Engineers' Circle Gampaha</a>
                    <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar top-bar"></span>
                        <span class="navbar-toggler-bar middle-bar"></span>
                        <span class="navbar-toggler-bar bottom-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse  navbar-collapse justify-content-end" id="navigation">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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

      <!--   Core JS Files   -->
    <script src="{{ asset("now-ui-landing/assets/js/core/jquery.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("now-ui-landing/assets/js/core/popper.min.js") }}" type="text/javascript"></script>
    <script src="{{ asset("now-ui-landing/assets/js/core/bootstrap.min.js") }}" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset("now-ui-landing/assets/js/plugins/bootstrap-switch.js") }}"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset("now-ui-landing/assets/js/plugins/nouislider.min.js") }}" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="{{ asset("now-ui-landing/assets/js/plugins/bootstrap-datepicker.js") }}" type="text/javascript"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset("now-ui-landing/assets/js/now-ui-kit.js?v=1.2.0") }}" type="text/javascript"></script>
</body>
</html>
