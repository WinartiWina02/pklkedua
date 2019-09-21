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
                <div class="card-header">Mengubah Data Petugas</div>
                <div class="card-body">
                    <form action="{{ route('penerbit.update', $penerbit->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}

      <div class="form-group">
         <label for="">Nama Penerbit</label>
        <input class="form-control" value="{{ $penerbit->penerbit_nama }}" type="text" name="penerbit_nm">
    </div>
    <div class="form-group">
         <label for="">Alamat Penerbit</label>
        <input class="form-control" value="{{ $penerbit->penerbit_alamat }}" type="text" name="penerbit_al">
    </div>
    <div class="form-group">
         <label for="">No Telp</label>
        <input class="form-control" value="{{ $penerbit->penerbit_telp }}" type="text" name="penerbit_tp">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('/admin/penerbit') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
