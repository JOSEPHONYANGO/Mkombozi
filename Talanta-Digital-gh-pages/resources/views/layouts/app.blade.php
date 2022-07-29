<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', env('APP_NAME'))</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        .social-icons a:hover img {
            transform: translateY(-5px);
        }

        /*..........Footer........*/

        #footer {
            background-image: linear-gradient(to right, #a517ba, #5f1782);
            color: white;
        }

        .footer-img {
            width: 100%;

        }

        .footer-box {
            padding: 20px;
        }

        .footer-box img {
            width: 120px;
            margin-bottom: 20px;
        }

        .footer-box .fa {
            margin-right: 8px;
            font-size: 25px;
            height: 40px;
            width: 40px;
            text-align: center;
            padding-top: 7px;
            border-radius: 2px;
            background-image: linear-gradient(to right, #a517ba, #5f1782);
        }

        .footer-box .form-control {
            box-shadow: none !important;
            border: none;
            border-radius: 0;
            margin-top: 25px;
            max-width: 250px;
        }

        .footer-box .btn-primary {
            box-shadow: none !important;
            border: none;
            border-radius: 0;
            margin-top: 30px;
            background-image: linear-gradient(to right, #a517ba, #5f1782);
        }

        hr {
            background-color: white;

        }

        .copyright {
            margin-bottom: 0;
            padding-bottom: 20px;
            text-align: center;
        }

    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm sticky-top"
            style="background-image: linear-gradient(to right,#a517ba,#5f1782);">
            <div class="container">
                <a class="navbar-brand fw-bold text-uppercase text-white fs-4" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        @guest
                            <!-- Button trigger modal -->
                            <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#loginModal"
                                id="login-button-button">
                                Login
                            </button>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn text-white" data-bs-toggle="modal"
                                data-bs-target="#registerModal" id="registration-button-button">
                                Register
                            </button>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        {{ __('Account') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>

        <!-- Footer Section -->
        <section id="footer" class="container-fluid" <img src="IMAGES/wave2.png" class="footer-img">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-box">
                        <img src="IMAGES/demo-logo.png" alt="">
                        <p>Web Development,Digital Marketing and Graphics Design Classes from the Best Tutors</p>
                    </div>
                    <div class="col-md-4 footer-box">
                        <p><b>CONTACT US</b></p>
                        <p><i class="fa fa-map-marker"></i>Jamii Trading Center</p>
                        <p><i class="fa fa-phone"></i>+254 715 555 383</p>
                        <p><i class="fa fa-envelope-o"></i>Email:talantadigitalke@gmail.com</p>
                    </div>
                    <div class="col-md-4 footer-box">
                        <p><b>Feedback</b></p>
                        <input type="text" class="form-control" placeholder="Your Name">
                        <input type="number" class="form-control" placeholder="Phone Number">
                        <input type="email" class="form-control" placeholder="Your Email">
                        <button type="button" class="btn btn-primary">SEND</button>

                    </div>
                </div>
                <hr>
                <p class="copyright">Powered by Talanta Digital Solutions &copy; {{date("Y")}}</p>
            </div>
        </section>

        <!-- Login modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="loginModalLabel">Login</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="d-none alert alert-warning align-items-center" role="alert" id="login-message">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                </svg>
                                <div class="px-2">
                                    You are required to login to register courses.
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="login_email" value="{{ old('email') }}" required autocomplete="email"
                                    autofocus>
                                <small id="email_err" class="d-none text-danger"></small>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="text-md-end">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="login_password"
                                    required autocomplete="current-password">
                                <small id="password_err" class="d-none text-danger"></small>
                            </div>

                            <div class="row">
                                <div class="">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row col-12">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-primary" id="login-button">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button id="registration-button" class="btn">Register</button>
                                </div>
                            </div>

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Register modal -->
        <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerModalLabel">Register</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="mb-2">
                                <label for="name" class="form-label text-md-end">{{ __('Name') }}</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ old('name') }}" required autocomplete="name"
                                    placeholder="enter your name" autofocus>
                                <small id="register_name_err" class="d-none text-danger"></small>
                            </div>

                            <div class="mb-2">
                                <label for="email" class="form-label text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email"
                                    placeholder="enter your email">
                                <small id="register_email_err" class="d-none text-danger"></small>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label for="password" class="form-label text-md-end">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="enter your password">
                                    <small id="register_password_err" class="d-none text-danger"></small>
                                </div>

                                <div class="col-md-6">
                                    <label for="password-confirm"
                                        class="form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="confirm your password">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="">
                                <button type="submit" class="btn btn-primary" id="register-button">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
