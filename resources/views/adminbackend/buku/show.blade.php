@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Buku</div>
                    <div class="card-body">
                         <div class="form-group">
                            <label for="">Nama Kategori</label>
                            <select name="kt_nama" class="form-control" disabled>
                                @foreach($kategori as $data)
                            <option value="{{ $data->id}}">
                                {{ $data->kategori_nama}}
                            </option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Nama Penerbit</label>
                            <select name="pb_nama" class="form-control" disabled>
                                @foreach($penerbit as $data)
                            <option value="{{ $data->id}}">
                                {{ $data->penerbit_nama}}
                            </option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Judul Buku</label>
                            <input class="form-control" type="text" name="buku_jdl"  value ="{{ $buku->buku_judul }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Halaman</label>
                            <input class="form-control" type="text" name="jl_hl" value ="{{ $buku->buku_jumhal }}"disabled >
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <input class="form-control" type="text" name="deskripsi"  value ="{{ $buku->buku_deskripsi }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Pengarang</label>
                            <input class="form-control" type="text" name="pengarangyah"  value ="{{ $buku->buku_pengarang }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="">Tahun Tebit</label>
                            <input class="form-control" type="date" name="tahun" value ="{{ $buku->buku_tahun_terbit }}" disabled>
                        </div>
                         <div class="form-group">
                            <a href="{{ url('/admin/buku') }}" class="btn btn-outline-info">Kembali</a>
                        </div>
                  </div>
          </div>
        </div>
    </div>
</div>
@endsection
