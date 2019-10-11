@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Petugas</div>
                <div class="card-body">
                <div class="form-group">
                    <label for="">Petugas</label>
                    <input class="form-control" value="{{ $petugas->petugas_nama }}" type="text" name="petugas_nama" readonly>
                </div>
                <div class="form-group">
                    <a href="{{ url('/admin/petugas') }}" class="btn btn-outline-info">Kembali</a>
                </div>
             </div>
            </div>
        </div>
    </div>
</div>
@endsection


