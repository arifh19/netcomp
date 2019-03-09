@extends('layouts.welcome')

@section('content')
    <section  id="competition-page">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 left-animated">
                    <h1 class="title"><span>Innovative</span><br/>Idea</h1>
                    <p class="content">Innovative Idea
                         merupakan salah satu lomba dari rangkaian kegiatan FORKOM TRI yang diperuntukkan untuk mahasiswa Sarjana Terapan Teknologi Rekayasa Internet. Technovation merupakan lomba pengembangan ide mengenai solusi inovatif berbasis teknologi informasi yang menguji kemampuan analisis masalah dan problem solving peserta. Ide solusi yang ada diharapkan dapat dikembangkan dan menjadi suatu hal yang inovatif dan berpeluang dari segi teknologi maupun bisnis. Technovation terdiri dari dua babak. Babak pertama adalah pendaftaran tim dan pengumpulan ide dalam bentuk proposal. Babak kedua adalah presentasi mengenai ide yang diajukan.
                        <div>
                            <h3>Hadiah</h3>
                            <p>Juara 1 <br/> Susu Ultramilk</p>
                            <p>Juara 2 <br/> Pulpen</p>
                            <p>Juara 3 <br/> Sepatu</p>
                        </div>
                    </p>
                        <button class="btn btn-green"><a href="/panduan.pdf" target="_blank" style="color:white">Download Buku Panduan</a></button><br />
                    </p>
                </div>
                <div class="col-md-4 offset-md-1 right-animated">
                        <img class="logo" src="{{ asset('img/networking.png') }}" alt="Networking Contest">
                </div>
            </div>
        </div>
    </section>
@endsection
