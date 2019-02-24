@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-2 center">
        </div>
        <div class="col-lg-8 center">
            <div class="card">
                <div class="card-header"><center>Net Competition</center></div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Upload Proposal</h3>
                    </div>
                    <hr>
                    <form enctype="multipart/form-data" action="{{route('peserta.proposal.store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="upload" class="control-label mb-1">Upload Proposal</label>
                            <input name="upload" type="file" class="form-control" aria-required="true" aria-invalid="false" required>
                            <span class="help-block" data-valmsg-for="upload" data-valmsg-replace="true"></span>
                        </div>
                        <div>
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-send fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Upload</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                    </form>
                    <br>
                    @if(\App\Proposal::where('user_id',auth()->user()->id)->count()>0)
                        <center><iframe src ="{{ asset('/proposal/'.$proposal->upload) }}" width="750px" height="550px"></iframe></center>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
