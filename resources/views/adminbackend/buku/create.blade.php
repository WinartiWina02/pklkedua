@extends('layouts.admin')
@section('content')
 <div class="container">
   <div class="row justify-content-center">
     <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Peminjaman</div>
                    <div class="card-body">
                        <form action="{{ route('buku.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <select name="kt_nama" class="form-control">
                                    @foreach($kategori as $data)
                                <option value="{{ $data->id}}">
                                    {{ $data->kategori_nama}}
                                </option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Penerbit</label>
                                <select name="pb_nama" class="form-control">
                                    @foreach($penerbit as $data)
                                <option value="{{ $data->id}}">
                                    {{ $data->penerbit_nama}}
                                </option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Judul Buku</label>
                                <input class="form-control" type="text" name="buku_jdl">
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Halaman</label>
                                <input class="form-control" type="text" name="jl_hl">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <input class="form-control" type="text" name="deskripsi">
                            </div>
                            <div class="form-group">
                                <label for="">Pengarang</label>
                                <input class="form-control" type="text" name="pengarangyah">
                            </div>
                            <div class="form-group">
                                <label for="">Tahun Tebit</label>
                                <input class="form-control" type="date" name="tahun">
                            </div>
                            <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
                            <a name="" id="" class="btn btn-md btn-warning" href="{{route('buku.index')}}" role="button">kembali</a>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
    </div>
</div>
@endsection
