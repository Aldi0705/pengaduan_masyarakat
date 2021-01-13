@extends('layouts.frontend_layout')
@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">


<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit Pengguna</h6>
        <a href="{{route('pengguna.index')}}" class="btn btn-primary float-right">Kembali</a>
    </div>
    <div class="card-body">
        <form class="user" action="{{route('pengguna.update',['id' => $user->id])}}" method="post">
            @csrf
            {{method_field('patch')}}
            <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control form-control-user" value="{{ $user->name }}" id="nama" name="nama"
                        placeholder="Edit Nama" required="required">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="email">Email</label>
                    <input type="email" class="form-control form-control-user" name="email" value="{{ $user->email}}"
                        id="email" placeholder="Edit Email"required="required" >
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="telp">No Telpon</label>
                    <input type="telp" class="form-control form-control-user" name="telp" 
                        id="telp" placeholder="Edit No Telepon"required="required" value="{{$user->telp}}">
                </div>
            </div>
            <!-- <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="password">Password</label>
                    <input type="password" class="form-control form-control-user" name="password" v
                        id="password" placeholder="Edit Password"required="required">
                </div>
            </div> -->
            <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <label for="role">Role</label>
                    <select class="form-control" id="role" required="required" name="role"> 
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                    <option value="user">User</option>
                    </select>
                </div>    
            </div>
            <div class="form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="alamat">Masukan Alamat</label>
                    <textarea name="address" id="address" class="form-control" cols="30" rows="10" placeholder="Edit Alamat" value="{{$user->address}}"></textarea>
                </div>
            </div>
            <button class="btn btn-info text-white">Perbarui</button>
        </form>
    </div>
</div>

</div>
<!-- /.container-fluid -->
    
@stop