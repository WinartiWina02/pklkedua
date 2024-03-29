@extends('layouts.admin')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tables Buku</h5><br>
                <center>
                    <a href="{{ route('buku.create') }}"
                        class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating btn-outline">&nbsp;Tambah Data
                    </a>
                </center>
                <div class="card-body">
                     <table  id="datatable" class="table table-striped table-bordered" style="width:100%" >
                    {{-- <table id="bs4-table" class="table table-striped table-bordered" style="width:100%"> --}}
                        <thead>
                            <tr>
                                 <th>No</th>
                                <th>Nama Kategori</th>
                                <th>Nama Penerbit</th>
                                <th>Judul Buku</th>
                                <th>Jumlah Halaman</th>
                                <th>Deskripsi</th>
                                <th>Pengarang</th>
                                <th>Tahun Terbit</th>
                            <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($buku as $data)
                            <tr>
                                 <td>{{ $no++ }}</td>
                                <td>{{ $data->kategoris->kategori_nama }}</td>
                                <td>{{ $data->penerbits->penerbit_nama }}</td>
                                <td>{{ $data->buku_judul }}</td>
                                <td>{{ $data->buku_jumhal}}</td>
                                <td>{{ $data->buku_deskripsi }}</td>
                                <td>{{ $data->buku_pengarang }}</td>
                                <td>{{ $data->buku_tahun_terbit }}</td>
                                <td>
                                    <center><form action="{{route('buku.destroy', $data->id)}}" method="post">
                                         {{csrf_field()}}
                                     <a href="{{route('buku.edit', $data->id)}}"
                                         class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                     </a>
                                     <a href="{{route('buku.show', $data->id) }}"
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



