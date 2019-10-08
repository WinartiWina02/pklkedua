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
                <div class="card-header">Membuat Data Detail</div>
                <div class="card-body">
                    <form action="{{ route('detail.store') }}" method="post">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Id Peminjaman</label>
        <select name="peminjamans_id" class="form-control">
            @foreach($peminjaman as $data)
        <option value="{{ $data->id}}">
            {{ $data->id}}
        </option>
        @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Nama Buku</label>
        <select name="buku_judul" class="form-control">
            @foreach($buku as $data)
        <option value="{{ $data->id}}">
            {{ $data->buku_judul}}
        </option>
        @endforeach
        </select>
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
