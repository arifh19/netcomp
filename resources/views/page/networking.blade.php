@extends('layouts.welcome')

@section('content')
    <section  id="competition-page">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 left-animated">
                    <h1 class="title"><span>Networking</span><br/>Contest</h1>
                    <p class="content">Networking
                        Merupakan salah satu kompetisi yang diadakan oleh Forum Komunikasi Teknologi Rekaysa Internet guna mengembangkan potensi mahasiswa Teknologi Rekayasa Internet dalam ranah jaringan yang kedepannya dalam kompetisi ini akan disajikan persoalan yang terjadi dalam suatu jaringan, kemudian peserta dapat menuangkan solusi dari permasalahan dalam jaringan tersebut ke dalam software Cisco Packet Tracer.
                        <div>
                            <h3>Hadiah</h3>
                            <p>Juara 1 <br/> Susu Ultramilk</p>
                            <p>Juara 2 <br/> Pulpen</p>
                            <p>Juara 3 <br/> Sepatu</p>
                        </div>
                    </p>
                        <button class="btn btn-green"><a href="#" target="_blank" style="color:white">Download Buku Panduan</a></button><br />
                    </p>
                </div>
                <div class="col-md-4 offset-md-1 right-animated">
                        <img class="logo" src="{{ asset('img/networking.png') }}" alt="Networking Contest">
                </div>
            </div>
        </div>
    </section>
@endsection