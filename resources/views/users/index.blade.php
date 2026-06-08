@extends('layouts.admin')

@section('title','Data User')

@section('content')

<div class="card">

    <div class="card-header d-flex justify-content-between">

        <h3>Data User</h3>

        <a href="{{ route('users.create') }}"
           class="btn btn-primary">

            <i class="fas fa-plus"></i>
            Tambah User

        </a>

    </div>

    <div class="card-body">

        <table class="table table-bordered">

            <thead>

                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Aksi</th>
                </tr>

            </thead>

            <tbody>

                @forelse($users as $user)

                <tr>

                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $user->name }}</td>

                    <td>{{ $user->username }}</td>

                    <td>
                        <span class="badge badge-info">
                            {{ $user->role }}
                        </span>
                    </td>

                    <td>

                        <a href="{{ route('users.show',$user->id) }}"
                           class="btn btn-info btn-sm">

                            Detail

                        </a>

                        <a href="{{ route('users.edit',$user->id) }}"
                           class="btn btn-warning btn-sm">

                            Edit

                        </a>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="5" class="text-center">
                        Tidak ada data user
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection