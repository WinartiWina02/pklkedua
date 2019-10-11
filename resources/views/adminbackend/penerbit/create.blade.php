@extends('layouts.admin')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Membuat Data Penerbit</div>
                <div class="card-body">
                    <form action="{{ route('penerbit.store') }}" method="post">
                        {{ csrf_field() }}


    <div class="form-group">
        <label for="">Nama Penerbit</label>
        <input class="form-control" type="text" name="penerbit_nm">
    </div>

    <div class="form-group">
        <label for="">Alamat Penerbit</label>
        <input class="form-control" type="text" name="penerbit_al">
    </div>

    <div class="form-group">
        <label for="">No Tlp Penerbit</label>
        <input class="form-control" type="text" name="penerbit_tp">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ url('/admin/penerbit') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
