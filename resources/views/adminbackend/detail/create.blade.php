@extends('layouts.admin')
@section('content')
 <div class="container">
   <div class="row justify-content-center">
     <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Peminjaman</div>
                    <div class="card-body">
                        <form action="{{ route('detail.store') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
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
                                <label for="">Judul Buku</label>
                                <select name="buku_judul" class="form-control">
                                    @foreach($buku as $data)
                                <option value="{{ $data->id}}">
                                    {{ $data->buku_judul}}
                                </option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Pengembalian</label>
                                <input class="form-control" type="date" name="detail_tgl_kembali">
                            </div>
                            <div class="form-group">
                                <label for="">Detail Denda</label>
                                <input class="form-control" type="text" name="detail_denda">
                            </div>
                           <b>Status Peminjaman</b>
                            <div class="form-group">
                                <input class="with-gap" type="radio" name="detail_status_kembali" id="exampleRadios1" value="Dipinjam">
                                <label class="form-check-label" for="exampleRadios1">
                                    Dipinjam
                                </label>
                                <input class="with-gap" type="radio" name="detail_status_kembali" id="exampleRadios2" value="Selesai">
                                <label class="form-check-label" for="exampleRadios2">
                                    Selesai
                                </label>
                            </div>
                            <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
                            <a name="" id="" class="btn btn-md btn-warning" href="{{route('detail.index')}}" role="button">kembali</a>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
    </div>
</div>
@endsection
