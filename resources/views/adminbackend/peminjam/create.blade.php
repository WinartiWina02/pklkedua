@extends('layouts.admin')
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
