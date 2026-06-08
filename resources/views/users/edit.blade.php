@extends('layouts.admin')

@section('title','Edit User')

@section('content')

<div class="card">

    <div class="card-header">
        Edit User
    </div>

    <div class="card-body">

        <form action="{{ route('users.update',$user->id) }}"
              method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">

                <label>Nama</label>

                <input type="text"
                       name="name"
                       class="form-control"
                       value="{{ $user->name }}">

            </div>

            <div class="form-group">

                <label>Username</label>

                <input type="text"
                       name="username"
                       class="form-control"
                       value="{{ $user->username }}">

            </div>

            <div class="form-group">

                <label>Role</label>

                <select name="role"
                        class="form-control">

                    <option value="admin"
                        {{ $user->role=='admin'?'selected':'' }}>
                        Admin
                    </option>

                    <option value="petugas"
                        {{ $user->role=='petugas'?'selected':'' }}>
                        Petugas
                    </option>

                </select>

            </div>

            <button class="btn btn-primary">

                Update

            </button>

        </form>

    </div>

</div>

@endsection