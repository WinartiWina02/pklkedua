@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Peminjaman</div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Petugas</label>
                        <select name="petugas_nama" class="form-control" disabled>
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
                    <label for="">Tanggal Pinjaman</label>
                    <input class="form-control" type="date" name="pjm_tgl" value ="{{ $peminjaman->pjm_tgl }}" disabled>
                </div>
                <div class="form-group">
                    <label for="">Tanggal Pengembalian</label>
                    <input class="form-control" type="date" name="pjm_tglkembali" value ="{{ $peminjaman->pjm_tglkembali }}" disabled>
                </div>
                <a name="" id="" class="btn btn-md btn-warning" href="{{route('peminjaman.index')}}" role="button">kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection