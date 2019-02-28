<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Net Competition 2019</title>

    <!-- Fontfaces CSS-->
    <link href="{{ asset('/cooladmin/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/cooladmin/vendor/font-awesome-4.7/css/font-awesome.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/cooladmin/vendor/font-awesome-5/css/fontawesome-all.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/cooladmin/vendor/mdi-font/css/material-design-iconic-font.min.css') }}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('/cooladmin/vendor/bootstrap-4.1/bootstrap.min.css') }}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('/cooladmin/vendor/animsition/animsition.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/cooladmin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/cooladmin/vendor/wow/animate.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/cooladmin/vendor/css-hamburgers/hamburgers.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/cooladmin/vendor/slick/slick.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/cooladmin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('/cooladmin/vendor/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('/cooladmin/css/theme.css') }}" rel="stylesheet" media="all">


</head>
@include('sweetalert::alert')
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">

                    <div class="header-mobile-inner">

                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                                @if (auth()->user()->hasRole('admin'))
                                    <li>
                                    <a href="/">
                                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                                    </li>
                                @elseif (auth()->user()->hasRole('peserta'))
                                    @if(\App\Team::where('user_id', auth()->user()->id)->count()<1)
                                        <li>
                                        <a href="{{route('home')}}">
                                                <i class="fas fa-tachometer-alt"></i>Data Tim</a>
                                        </li>
                                    @else
                                        <li>
                                        <a href="{{route('home')}}">
                                            <i class="fas fa-tachometer-alt"></i>Pengumuman</a>
                                        </li>
                                        <li>
                                        <a href="{{route('peserta.tim')}}">
                                            <i class="fas fa-users"></i>Team</a>
                                        </li>
                                        @if(\App\Team::where('user_id', auth()->user()->id)->first()->kategori_id==1)
                                            <li>
                                            <a href="{{route('peserta.proposal')}}">
                                                <i class="fas fa-book"></i>&nbspUpload Proposal</a>
                                            </li>
                                        @endif
                                    @endif
                                @else
                                @endif
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('/img/netcomp.png') }}" alt="Net Competition" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        @if (auth()->user()->hasRole('admin'))
                        <li>
                            <a href="/">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            </li>
                        @elseif (auth()->user()->hasRole('peserta'))
                            @if(\App\Team::where('user_id', auth()->user()->id)->count()<1)
                                <li>
                                <a href="{{route('home')}}">
                                        <i class="fas fa-tachometer-alt"></i>Data Tim</a>
                                </li>
                            @else
                                <li>
                                <a href="{{route('home')}}">
                                    <i class="fas fa-tachometer-alt"></i>Pengumuman</a>
                                </li>
                                <li>
                                <a href="{{route('peserta.tim')}}">
                                    <i class="fas fa-users"></i>Team</a>
                                </li>
                                @if(\App\Team::where('user_id', auth()->user()->id)->first()->kategori_id==1)
                                    <li>
                                        <a href="{{route('peserta.proposal')}}">
                                        <i class="fas fa-book"></i>&nbspUpload Proposal</a>
                                    </li>
                                @endif
                            @endif
                        @else
                        @endif

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">

                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        </div>
                                        </div>

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{ asset('/img/'. auth()->user()->avatar) }}" alt="{{auth()->user()->name }}" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{auth()->user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{ asset('/img/'. auth()->user()->avatar) }}" alt="{{auth()->user()->name }}" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{auth()->user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{auth()->user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                            <a href="{{route('logout')}}">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
            <footer>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                           <p>Copyright © 2019 Teknologi Rekayasa Internet. All rights reserved. visit <a href="https://netcomp.web.id">Net Competition 2019</a>.</p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
    @yield('scripts')
    <!-- Jquery JS-->
    <script src="{{ asset('/cooladmin/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('/cooladmin/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('/cooladmin/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('/cooladmin/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('/cooladmin/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('/cooladmin/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('/cooladmin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('/cooladmin/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('/cooladmin/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('/cooladmin/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('/cooladmin/css/font-face.css') }}"></script>
    <script src="{{ asset('/cooladmin/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('/cooladmin/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('/cooladmin/js/main.js')}}"></script>

</body>

</html>
<!-- end document-->
