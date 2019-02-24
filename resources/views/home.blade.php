@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (auth()->user()->hasRole('admin'))
                        You are Admin
                    @elseif (auth()->user()->hasRole('reviewer'))
                        You are Reviewer
                    @elseif (auth()->user()->hasRole('peserta'))
                        You are Peserta
                    @else

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
