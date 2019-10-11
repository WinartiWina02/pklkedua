@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data Petugas</div>
                  <div class="card-body">
                         <form action="{{ route('peminjam.update', $peminjam->id) }}" method="post"  enctype="multipart/form-data">
                             <input name="_method" type="hidden" value="PATCH">
                                 {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="">Nama peminjam</label>
                                    <input class="form-control" value="{{ $peminjam->peminjam_nama }}" type="text" name="peminjam_nm">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat</label>
                                    <input class="form-control" value="{{ $peminjam->alamat }}" type="text" name="peminjam_al">
                                </div>
                                <div class="form-group">
                                    <label for="">Nama peminjam</label>
                                    <input class="form-control" value="{{ $peminjam->peminjam_telp }}" type="text" name="peminjam_tp">
                                </div>
                                    <div class="form-group">
                                    <label for="">Foto</label><br>
                                    <img src="{{ asset('assets/img/peminjam/'.$peminjam->foto) }}" alt="" height="250px" width="250px">
                                    <input type="file" class="form-control" name="foto">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-info">
                                    Simpan Data
                                    </button>
                                </div>
                                <div class="form-group">
                                    <a href="{{ url('/admin/peminjam') }}" class="btn btn-outline-info">Kembali</a>
                                </div>
                          </form>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
