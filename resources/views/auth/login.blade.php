<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- Meta data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta
        content="DayOne - It is one of the Major Dashboard Template which includes - HR, Employee and Job Dashboard. This template has multipurpose HTML template and also deals with Task, Project, Client and Support System Dashboard."
        name="description">
    <meta content="Spruko Technologies Private Limited" name="author">
    <meta name="keywords"
        content="admin dashboard, dashboard ui, backend, admin panel, admin template, dashboard template, admin, bootstrap, laravel, laravel admin panel, php admin panel, php admin dashboard, laravel admin template, laravel dashboard, laravel admin panel" />

    <!-- Title -->
    <title>Dayone - Multipurpose Admin & Dashboard Template</title>

    <!--Favicon -->
    <link rel="icon" href="{{ asset('assets') }}/images/brand/favicon.ico" type="image/x-icon" />

    <!-- Bootstrap css -->
    <link href="{{ asset('assets') }}/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

    <!-- Style css -->
    <link href="{{ asset('assets') }}/css/style.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/dark.css" rel="stylesheet" />
    <link href="{{ asset('assets') }}/css/skin-modes.css" rel="stylesheet" />

    <!-- Animate css -->
    <link href="{{ asset('assets') }}/plugins/animated/animated.css" rel="stylesheet" />

    <!---Icons css-->
    <link href="{{ asset('assets') }}/plugins/icons/icons.css" rel="stylesheet" />

    <!-- Select2 css -->
    <link href="{{ asset('assets') }}/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="{{ asset('assets') }}/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />
</head>

<body>
    <div class="page login-bg">
        <div class="page-single">
            <div class="container">
                <div class="row">
                    <div class="col mx-auto">
                        <div class="row justify-content-center">
                            <div class="col-md-7 col-lg-5">
                                <div class="card">
                                    <div class="p-4 pt-6 text-center">
                                        <h1 class="mb-2">Login</h1>
                                        <p class="text-muted">Sign In to your account</p>
                                    </div>
                                    <form class="card-body pt-3" id="login" method="POST" name="login"
                                        action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="form-label">Username</label>
                                            <input class="form-control" placeholder="Email" name="email"
                                                type="email">
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input class="form-control" placeholder="password" name="password"
                                                type="password">
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" name="remember"
                                                    value="1">
                                                <span class="custom-control-label">Remeber me</span>
                                            </label>
                                        </div>
                                        <div class="submit">
                                            <button class="btn btn-primary btn-block" type="submit">Login</button>
                                        </div>
                                        <div class="text-center mt-3">
                                            <p class="mb-2"><a href="#">Forgot Password</a></p>
                                            <p class="text-dark mb-0">Don't have account?<a class="text-primary ml-1"
                                                    href="#">Register</a></p>
                                        </div>
                                    </form>
                                    <div class="card-body border-top-0 pb-6 pt-2">
                                        <div class="text-center">
                                            <span class="avatar brround mr-3 bg-primary-transparent text-primary"><i
                                                    class="ri-facebook-line"></i></span>
                                            <span class="avatar brround mr-3 bg-primary-transparent text-primary"><i
                                                    class="ri-instagram-line"></i></span>
                                            <span class="avatar brround mr-3 bg-primary-transparent text-primary"><i
                                                    class="ri-twitter-line"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Jquery js-->
    <script src="{{ asset('assets') }}/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap4 js-->
    <script src="{{ asset('assets') }}/plugins/bootstrap/popper.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/bootstrap/js/bootstrap.min.js"></script>



    <!-- Select2 js -->
    <script src="{{ asset('assets') }}/plugins/select2/select2.full.min.js"></script>

    <!-- P-scroll js-->
    <script src="{{ asset('assets') }}/plugins/p-scrollbar/p-scrollbar.js"></script>

    <!-- Custom js-->
    <script src="{{ asset('assets') }}/js/custom.js"></script>

</body>

</html>
