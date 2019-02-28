<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Net Competition 2019</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    {{-- <link href="{{ asset('/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all"> --}}
    <link href="{{ asset('/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    {{-- <link href="{{ asset('/vendor/slick/slick.css') }}" rel="stylesheet" media="all"> --}}
    {{-- <link href="{{ asset('/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all"> --}}

    <!-- Main CSS-->
    <link href="{{ asset('/css/theme.css') }}" rel="stylesheet" media="all">


</head>

<body class="animsition" style="background-color:#e5e5e5">
    <div class="page-wrapper">


        <!-- PAGE CONTAINER-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">

                                <img src="{{ asset('/img/netcomp.png') }}" alt="CoolAdmin">

                        </div>
                        <div class="login-form">
                        <form action="{{route('login')}}" method="post">
                            @csrf
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" required>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    {{-- <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label> --}}
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="{{route('register')}}">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

            <footer>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                           <p>Copyright © 2019 Teknologi Rekayasa Internet. All rights reserved. visit <a href="https://tri.sv.ugm.ac.id">Net Competition 2019</a>.</p>
                        </div>
                    </div>
                </div>
            </footer>
    </div>
    @yield('scripts')
    @include('sweetalert::alert')
    <!-- Jquery JS-->
    <script src="{{ asset('/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    {{-- <script src="{{ asset('/vendor/bootstrap-4.1/popper.min.js') }}"></script> --}}
    <script src="{{ asset('/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    {{-- {{-- <script src="{{ asset('/vendor/slick/slick.min.js') }}">
    </script> --}}
    {{-- <script src="{{ asset('/vendor/wow/wow.min.js') }}"></script> --}}
    <script src="{{ asset('/vendor/animsition/animsition.min.js') }}"></script>
    {{-- <script src="{{ asset('/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/vendor/counter-up/jquery.counterup.min.js') }}">
    </script> --}}
    {{-- <script src="{{ asset('/vendor/circle-progress/circle-progress.min.js') }}"></script> --}}
    <script src="{{ asset('/css/font-face.css') }}"></script>
    {{-- <script src="{{ asset('/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('/vendor/select2/select2.min.js') }}">
    </script>--}}

    <!-- Main JS-->
    <script src="{{ asset('/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
