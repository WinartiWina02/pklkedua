@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data kategori</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama kategori</label>
                        <input class="form-control" value="{{ $kategori->kategori_nama }}" type="text" name="kategori_nama" readonly>
                    </div>
                    <div class="form-group">
                        <a href="{{ url('/admin/kategori') }}" class="btn btn-outline-info">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
