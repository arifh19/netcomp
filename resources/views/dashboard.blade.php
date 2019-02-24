@extends('layouts.master')

@section('content')

@if (auth()->user()->hasRole('admin'))
You are Admin
@elseif (auth()->user()->hasRole('reviewer'))
You are Reviewer
@elseif (auth()->user()->hasRole('peserta'))
    <div class="row">
        <div class="col-lg-2 center">
        </div>
        <div class="col-lg-8 center">
            <div class="card">
                <div class="card-header"><center>Net Competition</center></div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Papan Pengumuman</h3>
                    </div>
                    <hr>

                    <br>
                    <center>Belum ada informasi</center>

                </div>
            </div>
        </div>
    </div>
@else

@endif

@endsection
