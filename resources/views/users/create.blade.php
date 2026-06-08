@extends('layouts.admin')

@section('title','Tambah User')

@section('content')

<div class="card">

    <div class="card-header">
        Tambah User
    </div>

    <div class="card-body">

        <form action="{{ route('users.store') }}"
              method="POST">

            @csrf

            <div class="form-group">

                <label>Nama</label>

                <input type="text"
                       name="name"
                       class="form-control"
                       required>

            </div>

            <div class="form-group">

                <label>Username</label>

                <input type="text"
                       name="username"
                       class="form-control"
                       required>

            </div>

            <div class="form-group">

                <label>Password</label>

                <input type="password"
                       name="password"
                       class="form-control"
                       required>

            </div>

            <div class="form-group">

                <label>Role</label>

                <select name="role"
                        class="form-control">

                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>

                </select>

            </div>

            <button class="btn btn-success">

                Simpan

            </button>

        </form>

    </div>

</div>

@endsection