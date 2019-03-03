
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Home - Net Competition</title>


    <link rel="shortcut icon" type="image/png" href="img/logo-brand.png"/>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{ asset('vendor//bootstrap/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/animate1.css') }}" >
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/lightcase/css/lightcase.css') }}" >
    <link rel="stylesheet" href="{{ asset('vendor/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/slick/slick-theme.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

    <!-- Our Custom CSS -->
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
                            <a class="nav-link" href="/register">daftar<span class="line_menu"></span></a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">login<span class="line_menu"></span></a>
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


    <header class="video-header container-video">
        <div class="fullscreen-video-wrap">
            <video src="video/header.mp4" muted="muted" autoplay="true" loop="true" width="100%" height="100%" class="videoinsert">
            </video>
        </div>
        <div class="header-overlay"></div>
        <div class="header-content">
            <div class="row">
                    <h1 class="headline">// NET Competition</h1>
            </div>
            <div class="row">
                    <p class="desc-header"><br>Technology is not about tools, It's about a mindset</p>
            </div>
                <div class="call-btn">
                    <a href="/register"><button class="animated pulse infinite btn btn-custom header-button">Daftar Sekarang!</button></a>
                </div>
        </div>
    </header>


    <section id="perlombaan">
		<div class="container sec-title">
			<div class="row">
				<div class="col-md-12 bottom-animated">
                    <h1 class="sec-title text-center">Perlombaan</h1>
                    <hr class="title-line" />
                </div>
            </div>
             <!-- Karu perlombaan-->
            <div class="row bottom-animated">
                <div class="col-xs-12 col-sm-12 col-md-6 ">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="img/gambar-net.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="text-center">
                                <a href="#"><button class="btn btn-custom btn-transparent">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="img/gambar-idea.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="text-center">
                                    <a href="#"><button class="btn btn-custom btn-transparent">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
    </section>


  <section id="timeline" class="bottom-animated">
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="sec-title  text-center">Timeline</h1>
                    <hr class="title-line" />
                </div>
            </div>
			<div class="row">
                <div class="offset-md-3 col-md-6 bottom-animated ">
                    <div class="text-center" style="margin-top:20px;">
                        <input id="netT" type="radio" name="tabs" checked>
                        <label for="netT"><i class="fa fa-wifi fa-2x"></i> <br> <span>Networking</span></label>
                        <input id="ideaT" type="radio" name="tabs">
                        <label for="ideaT"> <i class="fa fa-star fa-2x"></i> <br> <span>Innovative Idea</span></label>

                        <section id="netContent">
                            <div class="timeline_info">
                                <div class="timeline-item mb-10">
                                    <div class="row">
                                        <div class="order-xs-1 col-xs-12  order-sm-1 col-sm-12  order-md-3 col-md-3  ">
                                            <div class="icon"><i class="fas fa-lg fa-user"></i></div>
                                        </div>
                                        <div class="order-xs-3 col-xs-12 order-sm-3 col-sm-12  order-md-4 col-md-8 desc-timeline">
                                            <div class="text"><b>Pendaftaran</b><br>
                                                <a href="#">Unduh buku panduan.</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item mb-10">
                                    <div class="row">
                                        <div class="order-xs-1 col-xs-12  order-sm-1 col-sm-12  order-md-3 col-md-3  ">
                                            <div class="icon"><i class="fas fa-lg fa-exclamation"></i></div>
                                        </div>
                                        <div class="order-xs-3 col-xs-12 order-sm-3 col-sm-12  order-md-4 col-md-8 desc-timeline  ">
                                            <div class="text"><b>Tahap 1:</b><br> Soal Teori</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item mb-10">
                                   <div class="row">
                                        <div class="order-xs-1 col-xs-12  order-sm-1 col-sm-12  order-md-3 col-md-3  ">
                                          <div class="icon"><i class="fas fa-lg fa-exclamation"></i></div>
                                        </div>
                                        <div class="order-xs-3 col-xs-12 order-sm-3 col-sm-12  order-md-8 col-md-8 desc-timeline">
                                            <div class="text"><b>Tahap 2:</b><br> Soal Lab</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item mb-10">
                                    <div class="row">
                                        <div class="order-xs-1 col-xs-12  order-sm-1 col-sm-12  order-md-3 col-md-3  ">
                                            <div class="icon"><i class="fas fa-lg fa-calendar-alt"></i></div>
                                        </div>
                                         <div class="order-xs-3 col-xs-12 order-sm-3 col-sm-12  order-md-4 col-md-8 desc-timeline ">
                                              <div class="text"><b>Pengumuman<br> Juara 1</b></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                        <section id="ideaContent">
                            <div class="timeline_info">
                                <div class="timeline-item mb-10">
                                    <div class="row">
                                        <div class="order-xs-1 col-xs-12  order-sm-1 col-sm-12  order-md-3 col-md-3  ">
                                            <div class="icon"><i class="fas fa-lg fa-user"></i></div>
                                        </div>
                                    <div class="order-xs-3 col-xs-12 order-sm-3 col-sm-12  order-md-4 col-md-8 desc-timeline">
                                        <div class="text"><b>Pendaftaran</b><br>
                                        <a href="#">Unduh buku panduan.</a></div>
                                    </div>
                                    </div>
                                </div>
                                <div class="timeline-item mb-10">
                                    <div class="row">
                                        <div class="order-xs-1 col-xs-12  order-sm-1 col-sm-12  order-md-3 col-md-3  ">
                                            <div class="icon"><i class="fas fa-lg fa-calendar"></i></div>
                                        </div>
                                        <div class="order-xs-3 col-xs-12 order-sm-3 col-sm-12  order-md-4 col-md-8 desc-timeline ">
                                            <div class="text"><b>Batas Pengumpulan Proposal</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item mb-10">
                                    <div class="row">
                                        <div class="order-xs-1 col-xs-12  order-sm-1 col-sm-12  order-md-3 col-md-3  ">
                                            <div class="icon"><i class="fas fa-lg fa-exclamation"></i></div>
                                        </div>
                                        <div class="order-xs-3 col-xs-12 order-sm-3 col-sm-12  order-md-4 col-md-8 desc-timeline ">
                                            <div class="text"><b>Babak Final</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item mb-10">
                                    <div class="row">
                                        <div class="order-xs-1 col-xs-12  order-sm-1 col-sm-12  order-md-3 col-md-3  ">
                                            <div class="icon"><i class="fas fa-lg fa-comment"></i></div>
                                        </div>
                                        <div class="order-xs-3 col-xs-12 order-sm-3 col-sm-12  order-md-4 col-md-8 desc-timeline  ">
                                            <div class="text"><b>Presentasi</b></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item mb-10">
                                    <div class="row">
                                        <div class="order-xs-1 col-xs-12  order-sm-1 col-sm-12  order-md-3 col-md-3  ">
                                            <div class="icon"><i class="fas fa-lg fa-calendar-alt"></i></div>
                                        </div>
                                        <div class="order-xs-3 col-xs-12 order-sm-3 col-sm-12  order-md-4 col-md-8  desc-timeline ">
                                            <div class="text"><b>Pengumuman Juara I</b></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>


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
    <script src="{{ asset('js/jquery.easeScroll.js') }}"></script>
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
