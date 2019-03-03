@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-3 center">
        </div>
        <div class="col-lg-6 center">
            <div class="alert au-alert-success alert-dismissible fade show au-alert au-alert--70per" role="alert">
                @if($team->verify_id==1)
                <i class="zmdi zmdi-close-circle"></i>
                @elseif($team->verify_id==2)
                <i class="zmdi zmdi-check-circle"></i>
                @else
                @endif
                <span class="content">{{$team->verify->keterangan}}</span>
                <button class="close" type="button" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"></span>
                </button>
            </div>




            <div class="card">
                <div class="card-header">
                    <center>Net Competition</center>
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <div class="row">
                            <div class="col-sm-3">
                               <a href="{{route('peserta.tim.edit')}}"><button type="button" class="btn btn-primary">Ubah</button></a>
                            </div>
                            <div class="col-sm-6">
                                <h3 class="text-center title-2">Data Tim</h3>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label mb-1"><b>Nama Tim</b> </label>
                            </div>
                            <div class="col-sm-6">
                                <label class="control-label mb-1">: {{$team->nama_tim}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label mb-1"><b>Cabang Lomba</b> </label>
                            </div>
                            <div class="col-sm-6">
                                <label class="control-label mb-1">: {{$team->kategori->nama}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label mb-1"><b>Nama Ketua Tim</b> </label>
                            </div>
                            <div class="col-sm-6">
                                <label class="control-label mb-1">: {{$team->ketua}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label mb-1"><b>NIM Ketua Tim</b> </label>
                            </div>
                            <div class="col-sm-6">
                                <label class="control-label mb-1">: {{$team->nim}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label mb-1"><b>WA Ketua Tim</b> </label>
                            </div>
                            <div class="col-sm-6">
                                <label class="control-label mb-1">: {{$team->wa}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label mb-1"><b>Line Ketua Tim</b> </label>
                            </div>
                            <div class="col-sm-6">
                                <label class="control-label mb-1">: {{$team->line}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label mb-1"><b>Nama Angota 1</b> </label>
                            </div>
                            <div class="col-sm-6">
                                <label class="control-label mb-1">: {{$team->anggota1}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label mb-1"><b>NIM Anggota 1</b> </label>
                            </div>
                            <div class="col-sm-6">
                                <label class="control-label mb-1">: {{$team->nim1}}</label>
                            </div>
                        </div>
                    </div>
                    @if($team->kategori_id==1)
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label mb-1"><b>Nama Anggota 2</b> </label>
                            </div>
                            <div class="col-sm-6">
                                <label class="control-label mb-1">: {{$team->anggota2}}</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label mb-1"><b>NIM Anggota 2</b> </label>
                            </div>
                            <div class="col-sm-6">
                                <label class="control-label mb-1">: {{$team->nim2}}</label>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
