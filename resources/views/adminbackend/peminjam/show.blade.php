@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/select2.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/components/select2-init.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('editorl');

    $(document).ready(function () {
        $('#select2').select2();
    })
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Peminjam</div>
                <div class="card-body">

    <div class="form-group">
        <label for="">Nama peminjam</label>
        <input class="form-control" value="{{ $peminjam->peminjam_nama }}" type="text" name="peminjam_nama" readonly>
    </div>

     <div class="form-group">
        <label for="">Alamat</label>
        <input class="form-control" value="{{ $peminjam->alamat}}" type="text" name="alamat" readonly>
    </div>

    <div class="form-group">
        <label for="">Alamat</label>
        <input class="form-control" value="{{ $peminjam->peminjam_telp}}" type="text" name="peminjam_telp" readonly>
    </div>

    <div class="form-group">
        <label for="">Foto</label><br>
        <img src="{{ asset('assets/img/peminjam/'.$peminjam->foto) }}" alt="" height="250px" width="250px" disabled>
        {{-- <input type="file" class="form-control" name="foto" disabled> --}}
    </div>

    <div class="form-group">
        <a href="{{ url('/admin/peminjam') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </div>
            </div>
                </div>
                    </div>
                        </div>
                            @endsection
