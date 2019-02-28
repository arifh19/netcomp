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
                                            <form enctype="multipart/form-data" method="POST" action="{{ route('register') }}">
                                                @csrf

                                                <div class="form-group row">
                                                    <label for="name" class="col-sm-4 col-form-label">{{ __('Name') }}</label>

                                                    <div class="col-sm-7">
                                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Name ">

                                                        @if ($errors->has('name'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('name') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="email" class="col-sm-4 col-form-label">{{ __('E-Mail Address') }}</label>

                                                    <div class="col-sm-7">
                                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="Email">

                                                        @if ($errors->has('email'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('email') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password" class="col-sm-4 col-form-label">{{ __('Password') }}</label>

                                                    <div class="col-sm-7">
                                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Password">

                                                        @if ($errors->has('password'))
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $errors->first('password') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="password-confirm" class="col-sm-4 col-form-label">{{ __('Confirm Password') }}</label>

                                                    <div class="col-sm-7">
                                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="avatar" class="col-sm-4 col-form-label">{{ __('Foto Profil') }}</label>

                                                    <div class="col-sm-7">
                                                        <input id="avatar" type="file" class="form-control" name="avatar" required>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0">
                                                    <div class="col-sm-7 offset-sm-4">
                                                        <button type="submit" class="au-btn au-btn--block au-btn--green m-b-20">
                                                            {{ __('Register') }}
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        <div class="register-link">
                                            <p>
                                                    Already have account?
                                                <a href="{{route('login')}}">Sign in Here</a>
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
