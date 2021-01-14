@extends('layouts.frontend_layout')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Pengaduan</h6>
        @if (Auth::user()->role === 'user')
        <a href="{{route('pengaduan.create')}}" class="btn btn-primary btn-sm float-right">
            <i class="fas fa-user-plus"></i>
            Tambah Pengaduan
        </a>
        @endif
    </div>
    <div class="card-body">
    @if (Auth::user()->role === 'user')
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="110%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nama Pelapor</th>
                        <th>Nik</th>
                        <th>Isi Laporan</th>
                        <th>Foto</th>
                        <th collspan="100%">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($complaints as $complaint)

                    <tr>
                        <td>{{$complaint->user->name}}</td>
                        <td>{{$complaint->nik}}</td>
                        <td>{!! $complaint->isi_laporan !!}</td>
                        <td><img src="{{asset('data_file/'.$complaint->foto)}}" width="300" alt=""></td>
                        <td>
                            <a href="{{route('pengaduan.show',['id'=>$complaint->id])}}" class="btn btn-info btn-sm">
                                <i class="fa fa-info"></i>
                            </a>
                            
                            <a href="{{route('pengaduan.edit',['id'=>$complaint->id])}}" class="btn btn-success btn-sm">
                            <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a href="{{route('pengaduan.destroy',['id'=>$complaint->id])}}" class="btn btn-danger btn-sm">
                                <i class="fas fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
@stop