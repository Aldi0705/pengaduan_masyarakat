@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Pengguna</h6>
        <a href="{{route('pengaduan.index')}}" class="btn btn-primary float-right">Kembali</a>
    </div>
    <div class="card-body">
        <form class="user" action="{{route('pengaduan.store')}}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                    <label for="nik">Nik</label>
                    <input type="nik" class="form-control form-control-user" name="nik"
                        id="nik" placeholder="Masukan Nik"required="required" >
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <label for="alamat">Isi Laporan</label>
                <textarea name="address" id="address-editor" class="form-control" cols="30" rows="10" placeholder="Masukan Laporan"></textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="formFileMultiple" class="form-label">Masukkan Bukti</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>
            <button class="btn btn-info text-white">Tambah Pengguna</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
    
@stop