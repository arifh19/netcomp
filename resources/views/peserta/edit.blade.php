@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-3 center">
        </div>
        <div class="col-lg-6 center">
            <div class="card">
                <div class="card-header">Pendaftaran Tim dan cabang lomba</div>
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center title-2">Data Tim</h3>
                    </div>
                    <hr>
                    <form action="{{route('team.store')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nama_tim" class="control-label mb-1">Nama Tim</label>
                            <input id="nama_tim" name="nama_tim" type="text" class="form-control" aria-required="true" aria-invalid="false" required value="{{$teamku->nama_tim}}">
                            <span class="help-block" data-valmsg-for="nama_tim" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group has-success">
                            <label for="kategori_id" class="control-label mb-1">Cabang Lomba</label>
                        <select onchange="getval(this);" name="kategori_id" id="kategori_id" class="form-control" required>
                                    <option value="0">Pilih Cabang Lomba </option>
                                    @foreach ($kategoris as $kategori)
                                        <option value="{{$kategori->id}}">{{$kategori->nama}}</option>
                                    @endforeach
                                </select>
                            <span class="help-block field-validation-valid" data-valmsg-for="kategori_id" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="ketua" class="control-label mb-1">Nama Ketua Tim</label>
                            <input id="ketua" name="ketua" type="text" class="form-control" aria-required="true" aria-invalid="false" required value="{{$teamku->ketua}}">
                            <span class="help-block" data-valmsg-for="ketua" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="nim" class="control-label mb-1">NIM Ketua Tim</label>
                            <input id="nim" name="nim" type="text" class="form-control" aria-required="true" aria-invalid="false" required value="{{$teamku->nim}}">
                            <span class="help-block" data-valmsg-for="nim" data-valmsg-replace="true"></span>
                        </div>
                        <div id="wa" class="form-group">
                            <label for="wa" class="control-label mb-1">No WA Ketua Tim</label>
                            <input id="wa" name="wa" type="text" class="form-control" aria-required="true" aria-invalid="false" required value="{{$teamku->wa}}">
                            <span class="help-block" data-valmsg-for="wa" data-valmsg-replace="true"></span>
                        </div>
                        <div id="line" class="form-group">
                            <label for="line" class="control-label mb-1">ID Line Ketua Tim</label>
                            <input id="line" name="line" type="text" class="form-control" aria-required="true" aria-invalid="false" required value="{{$teamku->line}}">
                            <span class="help-block" data-valmsg-for="line" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="anggota1" class="control-label mb-1">Nama Anggota 1</label>
                            <input id="anggota1" name="anggota1" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$teamku->anggota1}}">
                            <span class="help-block" data-valmsg-for="anggota1" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <label for="nim1" class="control-label mb-1">NIM Anggota 1</label>
                            <input id="nim1" name="nim1" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$teamku->nim1}}">
                            <span class="help-block" data-valmsg-for="nim1" data-valmsg-replace="true"></span>
                        </div>
                    @if($teamku->kategori_id==2)
                        <div id="anggota2" class="form-group" hidden>
                            <label for="anggota2" class="control-label mb-1">Nama Anggota 2</label>
                            <input id="anggota2" name="anggota2" type="text" class="form-control" aria-required="true" aria-invalid="false">
                            <span class="help-block" data-valmsg-for="anggota2" data-valmsg-replace="true"></span>
                        </div>
                        <div id="nim2" class="form-group" hidden>
                            <label for="nim2" class="control-label mb-1">NIM Anggota 2</label>
                            <input id="nim2" name="nim2" type="text" class="form-control" aria-required="true" aria-invalid="false">
                            <span class="help-block" data-valmsg-for="nim2" data-valmsg-replace="true"></span>
                        </div>
                        <div>
                    @else
                        <div id="anggota2" class="form-group">
                            <label for="anggota2" class="control-label mb-1">Nama Anggota 2</label>
                            <input id="anggota2" name="anggota2" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$teamku->anggota2}}">
                            <span class="help-block" data-valmsg-for="anggota2" data-valmsg-replace="true"></span>
                        </div>
                        <div id="nim2" class="form-group">
                            <label for="nim2" class="control-label mb-1">NIM Anggota 2</label>
                            <input id="nim2" name="nim2" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$teamku->nim2}}">
                            <span class="help-block" data-valmsg-for="nim2" data-valmsg-replace="true"></span>
                        </div>
                        <div>
                    @endif
                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                <i class="fa fa-send fa-lg"></i>&nbsp;
                                <span id="payment-button-amount">Ubah</span>
                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function getval(val) {
            if(val.value==1){
                $("#anggota2").removeAttr("hidden","");
                $("#nim2").removeAttr("hidden","");
            }else if(val.value==2){
                $("#anggota2").attr("hidden","");
                $("#nim2").attr("hidden","");
            }else{
                $("#anggota2").removeAttr("hidden","");
                $("#nim2").removeAttr("hidden","");
            }
        }

    </script>
@endsection
