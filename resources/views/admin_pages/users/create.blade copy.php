@extends('layouts.frontend_layout')
@section('content')
<div class="container ">
    <form class="user" action="/user/store" method="post">
    @csrf
        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="nama">Masukan Nama</label>
                <input type="text" class="form-control form-control-user" id="nama" name="nama"
                    placeholder="Nama" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <label for="email">Masukan Email</label>
                <input type="email" class="form-control form-control-user" name="email"
                    id="email" placeholder="Email"required="required" >
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 mb-3 mb-sm-0">
            <label for="password">Masukan Password</label>
                <input type="password" class="form-control form-control-user" name="password"
                    id="password" placeholder="Password"required="required">
            </div>
        </div>
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
                <input type="alamat" class="form-control form-control-user" name="alamat"
                    id="alamat" placeholder="alamat" required="required">
            </div>
        </div>
        <a type="submit" href="{{Route('pengguna.index')}}" class="btn btn-info text-white">Tambah Pengguna</a>
    </form>
</div>
@stop