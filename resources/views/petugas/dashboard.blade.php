@extends('layouts.app')

@section('content')
<div class="d-flex">

    {{-- Sidebar --}}
    <div class="bg-dark text-white p-3" style="width:250px; min-height:100vh;">
        <h4>Menu Petugas</h4>
        <hr>

        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a href="{{ route('petugas.dashboard') }}" class="nav-link text-white">
                    🏠 Dashboard
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="{{ route('petugas.pengambilan.index') }}" class="nav-link text-white">
                    📦 Pengambilan
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="{{ route('petugas.penyaluran.index') }}" class="nav-link text-white">
                    🚚 Penyaluran
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="{{ route('petugas.event.index') }}" class="nav-link text-white">
                    📅 Event
                </a>
            </li>
        </ul>
    </div>

    {{-- Content --}}
    <div class="flex-grow-1 p-4">
        <h2>Dashboard Petugas</h2>

        <div class="row mt-4">

            <div class="col-md-4">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <h4>Total Bantuan</h4>
                        <h2>{{ $totalBantuan ?? 15 }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h4>Bantuan Tersalurkan</h4>
                        <h2>{{ $tersalurkan ?? 120 }}</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <h4>Menunggu Verifikasi</h4>
                        <h2>{{ $verifikasi ?? 8 }}</h2>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection