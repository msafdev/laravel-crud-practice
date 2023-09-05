@extends('admin.layout')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)

        <li>{{ $error }}</li>

        @endforeach
    </ul>
</div>
@endif

<div class="card mt-4">
    <div class="card-body">
        <h5 class="card-title fw-bolder mb-3">Ubah Data Admin</h5>
        <form method="post" action="{{ route('admin.update', $data->id_admin) }}">
            @csrf
            <div class="mb-3">
                <label for="id_admin" class="form-label">ID Admin</label>
                <input type="text" class="form-control" id="id_admin" name="id_admin" value="{{ $data->id_admin }}">
            </div>
            <div class="mb-3">
                <label for="nama_admin" class="form-label">Nama Admin</label>
                <input type="text" class="form-control" id="nama_admin" name="nama_admin"
                    value="{{ $data->nama_admin }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ $data->username }}">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="text-center">
                <input type="submit" class="btn btn-primary" value="Ubah" />
            </div>
        </form>
    </div>
</div>
@stop