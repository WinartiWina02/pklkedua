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
                <div class="card-header">Membuat Data Detail</div>
                <div class="card-body">
                    <form action="{{ route('penerbit.store') }}" method="post">
                        {{ csrf_field() }}

        <div class="form-group">
        <label for="">Id Peminjaman</label>
        <input class="form-control" type="text" name="pnjm_kd">
    </div>

    <div class="form-group">
        <label for="">Id Buku</label>
        <input class="form-control" type="text" name="kode_bk">
    </div>

    <div class="form-group">
        <label for="">Tanggal Kembali</label>
        <input class="form-control" type="date" name="kembali">
    </div>

    <div class="form-group">
        <label for="">Detail Denda</label>
        <input class="form-control" type="text" name="detail">
    </div>

    <div class="form-group">
        <label for="">Status Kembali</label>
        <input class="form-control" type="text" name="status">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('/admin/detail') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
