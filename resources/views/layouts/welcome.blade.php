
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Home - Net Competition</title>


    <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo-brand.png')}}"/>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/animate1.css') }}" >
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/lightcase/css/lightcase.css') }}" >
    <link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app1.css') }}">
    <!-- Font Awesome JS -->
    <script defer src="{{ asset('vendor/fontawesome/solid.js') }}"></script>
    <script defer src="{{ asset('vendor/fontawesome/fontawesome.js') }}"></script>


</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top bottom-animated" id="myNav">
		<div class="container-fluid">
        <a href="/" class="navbar-brand">
                <div class="logo-nav"></div>
                <div class="logo-nav-mobile"></div>
			</a>
			<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#mynavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="navbar-nav ml-auto">
                    @if (Auth::guest())
                    <li class="nav-item">
                        <a class="nav-link" href="/">beranda<span class="line_menu"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">daftar<span class="line_menu"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">masuk<span class="line_menu"></span></a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Dashboard<span class="line_menu"></span></a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="dropdown"  aria-haspopup="true" aria-expanded="false">{{auth()->user()->name}}<span class="line_menu"></span></a>
                        <div class="nav-item dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button"><a href="#">Account</a></button>
                            <button class="dropdown-item" type="button"><a href="#">Setting</a></button>
                            <button class="dropdown-item" type="button"><a href="/logout">Logout</a></button>
                        </div>

                    </li>
                    @endif
                </ul>
			</div>
		</div>
    </nav>


    @yield('content')


    <footer id="footer">
        <p class="smaller wh text-center mb-0 mg-t-20">Net Competition - Teknologi Rekayasa Internet <br> Sekolah Vokasi, Universitas Gadjah Mada</p>
    </footer>


    <!-- jQuery  -->
    <script src="{{ asset('js/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('js/scrollreveal.min.js') }}"></script>


    <script src="{{ asset('vendor/slick/slick.js') }}"></script>
    <script src="{{ asset('vendor/lightcase/js/lightcase.js') }}"></script>
    <!-- Popper.JS -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/animatescroll.js') }}"></script>
    {{-- <script src="{{ asset('js/jquery.easeScroll.js') }}"></script> --}}
    <script src="{{ asset('js/main1.js') }}"></script>


    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133874037-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-133874037-1');
    </script>



</body>

</html>
