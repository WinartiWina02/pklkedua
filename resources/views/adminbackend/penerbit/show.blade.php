@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Penerbit</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Penerbit</label>
                        <input class="form-control" value="{{ $penerbit->penerbit_nama }}" type="text" name="penerbit_nama" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <input class="form-control" value="{{ $penerbit->penerbit_alamat }}" type="text" name="penerbit_alamat" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Telp Penerbit</label>
                        <input class="form-control" value="{{ $penerbit->penerbit_telp }}" type="text" name="penerbit_telp" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{ url('/admin/penerbit') }}" class="btn btn-outline-info">Kembali</a>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
