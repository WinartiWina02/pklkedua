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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Membuat Data Peminjam</div>
                <div class="card-body">
                    <form action="{{ route('peminjam.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

    <div class="form-group">
        <label for="">Nama Peminjam</label>
        <input class="form-control" type="text" name="nm_pm">
    </div>

    <div class="form-group">
        <label for="">Alamat Peminjam</label>
        <input class="form-control" type="text" name="al_pm">
    </div>

    <div class="form-group">
        <label for="">No Telp</label>
        <input class="form-control" type="text" name="nomor">
    </div>

    <div class="form-group">
        <label for="">Foto</label>
        <input type="file"  name="foto" id="foto" class="form-control" required>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">
        Simpan Data
        </button>
    </div>

    <div class="form-group">
        <a href="{{ url('/admin/peminjam') }}"  class="btn btn-cyle">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
