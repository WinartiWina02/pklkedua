@extends('layouts.app')
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
                <div class="card-header">Membuat Data Buku</div>
                <div class="card-body">
                    <form action="{{ route('buku.store') }}" method="post">
                        {{ csrf_field() }}


    <div class="form-group">
        <label for="">Kode Buku</label>
        <input class="form-control" type="text" name="kode_bk">
    </div>

    <div class="form-group">
        <label for="">Kode Kategori</label>
        <input class="form-control" type="text" name="kd_kg">
    </div>

    <div class="form-group">
        <label for="">Kode Penerbit</label>
        <input class="form-control" type="text" name="kd_pb">
    </div>

    <div class="form-group">
        <label for="">Judul Buku</label>
        <input class="form-control" type="text" name="judul">
    </div>

     <div class="form-group">
        <label for="">Jumlah Halaman</label>
        <input class="form-control" type="text" name="jumlah">
    </div>

     <div class="form-group">
        <label for="">Deskripsi</label>
        <input class="form-control" type="text" name="deskripsi">
    </div>

    <div class="form-group">
        <label for="">Pengarang</label>
        <input class="form-control" type="text" name="pengarang">
    </div>

    <div class="form-group">
        <label for="">Tahun Terbit</label>
        <input class="form-control" type="text" name="terbit">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('/admin/buku') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
