@extends('layouts.admin')
@section('content')
 <div class="container">
   <div class="row justify-content-center">
     <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Kartu Pendaftaran</div>
                    <div class="card-body">
                        <form action="{{ route('kartu.update', $kartu->id) }}" method="post" enctype="multipart/form-data">
                            <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nama Petugas</label>
                                <select name="nama_petugas" class="form-control">
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
                                <label for="">Kartu Tanggal Pembuatan</label>
                                <input class="form-control" type="date" name="kartu_tgl_pembuatan" value ="{{ $kartu->kartu_tgl_pembuatan }}">
                            </div>
                            <div class="form-group">
                                <label for="">Kartu Tanggal Akhir</label>
                                <input class="form-control" type="date" name="kartu_tgl_akhir" value ="{{ $kartu->kartu_tgl_akhir }}">
                            </div>
                          <b>Status Kartu</b>
                        <div class="form-group">
                            <input class="with-gap" type="radio" <?php echo ($kartu->kartu_status_aktif=='Aktif')?'checked':'' ?> name="kartu_status_aktif" id="on" value="Aktif">
                            <label class="form-check-label" for="on">
                                Aktif
                            </label>
                            <input class="with-gap" type="radio" <?php echo ($kartu->kartu_status_aktif=='Tidak Aktif')?'checked':'' ?> name="kartu_status_aktif" id="off" value="Tidak Aktif">
                            <label class="m-l-20" for="off">
                                Tidak Aktif
                            </label>
                        </div>
                            <button type="submit" name="Simpan" class="btn btn-md btn-info">Simpan</button>
                     </form>
                 </div>
             </div>
         </div>
    </div>
</div>
@endsection
