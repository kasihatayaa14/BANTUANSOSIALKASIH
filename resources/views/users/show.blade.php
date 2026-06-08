@extends('layouts.admin')

@section('title','Detail User')

@section('content')

<div class="card">

    <div class="card-header">

        Detail User

    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <tr>
                <th>Nama</th>
                <td>{{ $user->name }}</td>
            </tr>

            <tr>
                <th>Username</th>
                <td>{{ $user->username }}</td>
            </tr>

            <tr>
                <th>Role</th>
                <td>{{ $user->role }}</td>
            </tr>

            <tr>
                <th>Dibuat</th>
                <td>{{ $user->created_at }}</td>
            </tr>

        </table>

        <a href="{{ route('users.index') }}"
           class="btn btn-secondary">

            Kembali

        </a>

    </div>

</div>

@endsection