@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Peminjaman</div>
                <br>
                <center><a href="{{ route('peminjaman.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Id Petugas</th>
                                <th>Id Peminjam</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Kembali</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($peminjaman as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->id_petugas}}</td>
                    <td>{{ $data->id_peminjam }}</td>
                    <td>{{ $data->peminjam_tgl }}</td>
                    <td>{{ $data->peminjam_tgl_harus_kembali }}</td>
                    <td><a href="{{ route('peminjaman.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('peminjaman.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                    <td><form action="{{ route('peminjaman.destroy', $data->id) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
