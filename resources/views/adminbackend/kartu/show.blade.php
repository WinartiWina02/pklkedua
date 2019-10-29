@extends('layouts.admin')
@section('content')
 <div class="container">
   <div class="row justify-content-center">
     <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data Kartu Pendaftaran</div>
                    <div class="card-body">
                        <form action="{{ route('kartu.update', $kartu->id) }}" method="post" enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nama Petugas</label>
                                <select name="nama_petugas" class="form-control" disabled>
                                    @foreach($petugas as $data)
                                <option value="{{ $data->id}}">
                                    {{ $data->petugas_nama}}
                                </option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Nama Peminjam</label>
                                <select name="peminjam_nama" class="form-control" disabled>
                                    @foreach($peminjam as $data)
                                <option value="{{ $data->id}}">
                                    {{ $data->peminjam_nama}}
                                </option>
                                @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Kartu Tanggal Pembuatan</label>
                                <input class="form-control" type="date" name="kartu_tgl_pembuatan" value ="{{ $kartu->kartu_tgl_pembuatan }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Kartu Tanggal Akhir</label>
                                <input class="form-control" type="date" name="kartu_tgl_akhir" value ="{{ $kartu->kartu_tgl_akhir }}" disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Kartu Status</label>
                                <input class="form-control" type="text" name="kartu_status_aktif" value ="{{ $kartu->kartu_status_aktif }}"disabled>
                            </div>
                            <a name="" id="" class="btn btn-md btn-warning" href="{{route('kartu.index')}}" role="button">kembali</a>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
    </div>
</div>
@endsection
