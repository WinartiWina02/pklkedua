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
                <div class="card-header">Membuat Data Peminjaman</div>
                <div class="card-body">
                    <form action="{{ route('peminjaman.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nama Petugas</label>
                        <select name="petugas_nama" class="form-control">
                            @foreach($petugas as $data)
                        <option value="{{ $data->id}}">
                            {{ $data->petugas_nama}}
                        </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Peminjam</label>
                        <select name="peminjam_nama" class="form-control">
                            @foreach($peminjam as $data)
                        <option value="{{ $data->id}}">
                            {{ $data->peminjam_nama}}
                        </option>
                        @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Pinjaman</label>
                        <input class="form-control" type="date" name="pjm_tgl">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Pengembalian</label>
                        <input class="form-control" type="date" name="pjm_tglkembali">
                    </div>
                <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
                <a name="" id="" class="btn btn-md btn-warning" href="{{route('peminjaman.index')}}" role="button">kembali</a>
     </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
