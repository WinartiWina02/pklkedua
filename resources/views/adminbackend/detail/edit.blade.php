@extends('layouts.admin')
@section('content')
 <div class="container">
   <div class="row justify-content-center">
     <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Peminjaman</div>
                    <div class="card-body">
                        <form action="{{ route('detail.update',$detail->id) }}" method="post" enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PATCH">
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
                                <input class="form-control" type="date" name="detail_tgl_kembali" value ="{{ $detail->detail_tgl_kembali }}">
                            </div>
                            <div class="form-group">
                                <label for="">Detail Denda</label>
                                <input class="form-control" type="text" name="detail_denda" value ="{{ $detail->detail_denda }}">
                            </div>
                            <div class="form-group">
                                <label for="">Status Kembali</label>
                                <input class="form-control" type="text" name="kembali" value ="{{ $detail->detail_status_kembali }}">
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
