{{-- @extends('layouts.admin')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tables Peminjam</h5><br>
                <center>
                    <a href="{{ route('peminjam.create') }}"
                        class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating btn-outline">&nbsp;Tambah Data
                    </a>
                </center>
                <div class="card-body">
                     <table  id="datatable" class="table table-striped table-bordered" style="width:100%" >
                    {{-- <table id="bs4-table" class="table table-striped table-bordered" style="width:100%"> --}}
                        {{-- <thead>
                            <tr>
                                  <th>No</th>
                                <th>Nama peminjam</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Foto</th>
                            <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($peminjam as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->peminjam_nama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->peminjam_telp }}</td>
                                <td><img src="{{ asset('assets/img/peminjam/'.$data->foto) }}" alt="" height="50px" width="100px"></td>
                                    <center><form action="{{route('peminjam.destroy', $data->id)}}" method="post">
                                         {{csrf_field()}}
                                     <a href="{{route('peminjam.edit', $data->id)}}"
                                         class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                     </a>
                                     <a href="{{route('peminjam.show', $data->id) }}"
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

 --}}

 @extends('layouts.admin')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Tables Peminjaman</h5><br>
                <center>
                    <a href="{{ route('peminjam.create') }}"
                        class="la la-cloud-upload btn btn-info btn-rfur if you know that im lonelyfur if you know that im lonelyounded btn-floating btn-outline">&nbsp;Tambah Data
                    </a>
                </center>
                <div class="card-body">
                     <table  id="datatable" class="table table-striped table-bordered" style="width:100%" >
                    {{-- <table id="bs4-table" class="table table-striped table-bordered" style="width:100%"> --}}
                        <thead>
                            <tr>
                                 <th>No</th>
                                <th>Nama peminjam</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Foto</th>
                            <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php $no = 1; @endphp
                            @foreach ($peminjam as $data)
                            <tr>
                                 <td>{{ $no++ }}</td>
                                <td>{{ $data->peminjam_nama }}</td>
                                <td>{{ $data->alamat }}</td>
                                <td>{{ $data->peminjam_telp }}</td>
                                <td><img src="{{ asset('assets/img/peminjam/'.$data->foto) }}" alt="" height="50px" width="100px"></td>
                                <td>
                                    <center><form action="{{route('peminjam.destroy', $data->id)}}" method="post">
                                         {{csrf_field()}}
                                     <a href="{{route('peminjam.edit', $data->id)}}"
                                         class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                     </a>
                                     <a href="{{route('peminjam.show', $data->id) }}"
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

