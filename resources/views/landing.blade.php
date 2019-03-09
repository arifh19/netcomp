@extends('layouts.welcome')

@section('content')
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
    <section id="tentang">
        <br><br>
		<div class="container sec-title">
			<div class="row">
				<div class="col-md-12 bottom-animated">
                    <h1 class="sec-title text-center">NETCOMP 2019</h1>
                    <hr class="title-line" />
                </div>
            </div>
             <!-- Karu perlombaan-->
            <div class="row bottom-animated">
                <center><p style="color: black">NETCOMP 2019 merupakan kompetisi bidang teknologi dalam ranah jaringan internet yang diselenggarakan oleh Forum Komunikasi Teknologi Rekayasa Internet (Forkom TRI) Departemen Teknik Elektro dan Informatika Sekolah Vokasi Universitas Gadjah Mada.

                    Kompetisi ini ditujukan untuk mahasiswa aktif D4 TRI angkatan 2017 dan 2018 sebagai sarana mengasah kemampuan sekaligus mengembangkan minat mahasiswa TRI agar selalu semangat dalam berinovasi dan berkarya untuk memajukan daya saing Indonesia di bidang teknologi dimasa mendatang.

                    Mengusung tema "Future Comes From Us", Netcomp akan hadir dengan dua kompetisi, yaitu Networking dan Innovative
                    Idea. Dua kompetisi ini tentunya menjadi sarana yang tepat buat kalian yang punya ide-ide brilian nan inovatif sekaligus meng-upgrade kemampuan jaringan internetmu saat ini.
                    Mari berkontribusi di Netcomp 2019, asah skillmu, dan menangkan hadiahnya!</p></center>
            </div>
		</div>
    </section>
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
                            <a href="{{route('networking')}}"><button class="btn btn-custom btn-transparent">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="img/gambar-idea.jpg" alt="Card image cap">
                        <div class="card-body">
                            <div class="text-center">
                                    <a href="{{route('innovative')}}"><button class="btn btn-custom btn-transparent">Selengkapnya</button></a>
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
                                                <a href="/panduan.pdf">Unduh buku panduan.</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item mb-10">
                                    <div class="row">
                                        <div class="order-xs-1 col-xs-12  order-sm-1 col-sm-12  order-md-3 col-md-3  ">
                                            <div class="icon"><i class="fas fa-lg fa-exclamation"></i></div>
                                        </div>
                                        <div class="order-xs-3 col-xs-12 order-sm-3 col-sm-12  order-md-4 col-md-8">
                                            <div class="text"><b>Tahap 1:</b><br> Soal Teori</div><br>
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
@endsection
