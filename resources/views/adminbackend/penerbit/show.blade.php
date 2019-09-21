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
                <div class="card-header">Menampilkan Data Penerbit</div>
                <div class="card-body">
    <div class="form-group">
        <label for="">Nama Penerbit</label>
        <input class="form-control" value="{{ $penerbit->penerbit_nama }}" type="text" name="penerbit_nama" disabled>
    </div>
      <div class="form-group">
        <label for="">Alamat</label>
        <input class="form-control" value="{{ $penerbit->penerbit_alamat }}" type="text" name="penerbit_alamat" disabled>
    </div>
      <div class="form-group">
        <label for="">Telp Penerbit</label>
        <input class="form-control" value="{{ $penerbit->penerbit_telp }}" type="text" name="penerbit_telp" disabled>
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
