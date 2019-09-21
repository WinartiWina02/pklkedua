@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman Detail Buku</div>
                <br>
                <center><a href="{{ route('detail.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Id Peminjam</th>
                                <th> Id   Buku</th>
                                <th>Tanggal Kembali</th>
                                <th>Denda</th>
                                <th>Kembali</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @foreach($detail as $data)
                <tr>
                    {{-- <td>{{ $loop->iteration }}</td> --}}
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->id_peminjaman }}</td>
                    <td>{{ $data->id_buku }}</td>
                     <td>{{ $data->detail_tgl_kembali }}</td>
                    <td>{{ $data->detail_denda }}</td>
                    <td>{{ $data->detail_status_kembali }}</td>

                    <td><a href="{{ route('detail.edit', $data->id) }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="{{ route('detail.show', $data->id) }}" class="btn btn-success">Detail Data</a></td>
                    <td><form action="{{ route('detail.destroy', $data->id) }}" method="post">
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

@section('js')

@endsection
