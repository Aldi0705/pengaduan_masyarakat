@extends('layouts.frontend_layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">List Pengguna</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Pelapor</th>
                        <th>Nik</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($complaints as $complaints)

                    <tr>
                        <td>{{$complaints->user_id}}</td>
                        <td>{{$complaints->nik}}</td>
                        <td>{{$complaints->isi_laporan}}</td>
                        <td>{{$complaints->foto}}</td>
                        <td>
                            <a href="{{route('pengguna.show',['id'=>$users->id])}}" class="btn btn-info btn-sm">
                                <i class="fa fa-info"></i>
                            </a>
                            
                            <a href="{{route('pengguna.edit',['id'=>$users->id])}}" class="btn btn-success btn-sm">
                            <i class="fas fa-pencil-alt"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@stop