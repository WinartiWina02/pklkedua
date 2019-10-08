@extends('layouts.admin')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tables Peminjaman</h5><br>
                <center>
                    <a href="{{ route('peminjaman.create') }}"
                        class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating btn-outline">&nbsp;Tambah Data
                    </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                            <th>Id</th>
                            <th> Id Petugas </th>
                            <th> Nama Peminjam</th>
                            <th> Tanggal Pinjaman</th>
                            <th> Tanggal Pengembalian</th>
                            <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($peminjaman as $data)
                            <tr>
                            <td>{{ $no++ }}</td>
                                <td>{{ $data->petugas->petugas_nama}}</td>
                                <td>{{ $data->peminjams->peminjam_nama}}</td>
                                <td>{{ $data->pjm_tgl}}</td>
                                <td>{{ $data->pjm_tglkembali}}</td>
                                <td>
                                    <center><form action="{{route('peminjaman.destroy', $data->id)}}" method="post">
                                         {{csrf_field()}}
                                     <a href="{{route('peminjaman.edit', $data->id)}}"
                                         class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                     </a>
                                     <a href="{{route('peminjaman.show', $data->id) }}"
                                         class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
                                     </a>
                                         <input type="hidden" name="_method" value="DELETE">
                                         <button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
                                     </form>
                                 </center>
                                 </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>
        </div>
    </div>
</section>
@endsection
