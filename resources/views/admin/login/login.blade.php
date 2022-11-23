<!doctype html>
<html lang="en" class="minimal-theme">


<!-- Mirrored from codervent.com/skodash/demo/tabular-menu/ltr/authentication-signin-with-header-footer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 06:15:34 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('admin')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('admin')}}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">

    <!-- loader-->
    <link href="{{asset('admin')}}/assets/css/pace.min.css" rel="stylesheet" />

    <title>Skodash - Bootstrap 5 Admin Template</title>
</head>

<body class="bg-surface">

<!--start wrapper-->
<div class="wrapper">

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded-0 border-bottom">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="{{asset('admin')}}/assets/images/brand-logo-2.png" width="140" alt=""/></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0 align-items-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                                Services <i class="bi bi-chevron-down align-middle ms-2"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">Contact Us</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown">
                                English
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:;">Support</a>
                        </li>
                    </ul>
                    <div class="d-flex ms-3 gap-3">
                        <a href="{{ route('login') }}" class="btn btn-primary btn-sm px-4 radius-30">Login</a>
                        <a href="{{ route('register') }}" class="btn btn-white btn-sm px-4 radius-30">Register</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!--start content-->
    <main class="authentication-content">
        <div class="container">
            <div class="mt-4">
                <div class="card rounded-0 overflow-hidden shadow-none border mb-5 mb-lg-0">
                    <div class="row g-0">
                        <div class="col-12 order-1 col-xl-7 d-flex align-items-center justify-content-center border-end">
                            <div class="card-header"></div>
                            <img src="{{asset('admin')}}/assets/images/error/auth-img-7.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-12 col-xl-5 order-xl-2">
                            <div class="card-body p-4 p-sm-5">
                                <h5 class="card-title">Sign In</h5>
                                <p class="card-text mb-4">See your growth and get consulting support!</p>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>

                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--end page main-->

    <footer class="bg-white border-top p-3 text-center fixed-bottom">
        <p class="mb-0">Copyright © 2021. All right reserved.</p>
    </footer>

</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{asset('admin')}}/assets/js/bootstrap.bundle.min.js"></script>

<!--plugins-->
<script src="{{asset('admin')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('admin')}}/assets/js/pace.min.js"></script>


</body>


<!-- Mirrored from codervent.com/skodash/demo/tabular-menu/ltr/authentication-signin-with-header-footer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 May 2022 06:15:36 GMT -->
</html>
