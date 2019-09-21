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
                <div class="card-header">Membuat Data Peminjaman</div>
                <div class="card-body">
                    <form action="{{ route('peminjaman.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

      </div>
    <div class="form-group">
        <label for="">Id Petugas</label>
        {{-- ptg_kd ngambilnya dari store --}}
        <select name="id_petugas" class="form-control">
    @foreach($petugas as $data)
        <option value="{{ $data->id }}">
            {{-- id_petugas daridatabase petugas --}}
            {{ $data->id}}
        </option>
    @endforeach
        </select>
        </div>


    <div class="form-group">
        <label for="">Id Peminjam</label>
        <input class="form-control" type="text" name="id_peminjam">
    </div>

    <div class="form-group">
        <label for="">Tanggal Peminjaman</label>
        <input class="form-control" type="date" name="peminjam_tgl">
    </div>

    <div class="form-group">
        <label for="">Harus Kembali</label>
        <input class="form-control" type="date" name="peminjam_tgl_hrs_kembali">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('/admin/peminjaman') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
