@extends('layouts.admin')

@section('title','Dashboard Admin')

@section('content')

<style>

.dashboard-header{
    background: linear-gradient(135deg,#4f46e5,#2563eb,#06b6d4);
    border-radius: 25px;
    padding: 30px;
    color: white;
    margin-bottom: 25px;
    box-shadow: 0 10px 30px rgba(37,99,235,.25);
}

.stat-card{
    border: none;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0,0,0,.08);
    transition: .3s;
    position: relative;
}

.stat-card:hover{
    transform: translateY(-8px);
}

.stat-icon{
    position: absolute;
    right: 20px;
    top: 20px;
    font-size: 65px;
    opacity: .2;
}

.card-user{
    background: linear-gradient(135deg,#06b6d4,#0891b2);
}

.card-masyarakat{
    background: linear-gradient(135deg,#22c55e,#16a34a);
}

.card-bantuan{
    background: linear-gradient(135deg,#f59e0b,#f97316);
}

.card-event{
    background: linear-gradient(135deg,#ef4444,#dc2626);
}

.quick-card{
    border: none;
    border-radius: 20px;
    transition: .3s;
    text-decoration: none;
}

.quick-card:hover{
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0,0,0,.1);
}

.quick-icon{
    font-size: 45px;
    margin-bottom: 10px;
}

.welcome-card{
    border: none;
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(0,0,0,.08);
    background: linear-gradient(135deg,#ffffff,#eef6ff);
    border-left: 8px solid #2563eb;
}

</style>

{{-- HEADER --}}
<div class="dashboard-header">

    <div class="d-flex justify-content-between align-items-center">

        <div>

            <h1 class="font-weight-bold mb-2">
                Dashboard Admin 🚀
            </h1>

            <p class="mb-0">
                Monitoring dan pengelolaan bantuan sosial secara realtime
            </p>

        </div>

        <div>

            <span class="badge badge-light p-3">
                Administrator Online
            </span>

        </div>

    </div>

</div>

{{-- STATISTIK --}}
<div class="row">

    <div class="col-lg-3 col-md-6 mb-4">

        <div class="card stat-card card-user text-white">

            <div class="card-body">

                <i class="fas fa-users stat-icon"></i>

                <h1>{{ $totalUser ?? 0 }}</h1>

                <h4>Total User</h4>

            </div>

        </div>

    </div>

    <div class="col-lg-3 col-md-6 mb-4">

        <div class="card stat-card card-masyarakat text-white">

            <div class="card-body">

                <i class="fas fa-user-friends stat-icon"></i>

                <h1>{{ $totalMasyarakat ?? 0 }}</h1>

                <h4>Masyarakat</h4>

            </div>

        </div>

    </div>

    <div class="col-lg-3 col-md-6 mb-4">

        <div class="card stat-card card-bantuan text-white">

            <div class="card-body">

                <i class="fas fa-hand-holding-heart stat-icon"></i>

                <h1>{{ $totalBantuan ?? 0 }}</h1>

                <h4>Jenis Bantuan</h4>

            </div>

        </div>

    </div>

    <div class="col-lg-3 col-md-6 mb-4">

        <div class="card stat-card card-event text-white">

            <div class="card-body">

                <i class="fas fa-calendar-alt stat-icon"></i>

                <h1>{{ $totalEvent ?? 0 }}</h1>

                <h4>Event Bantuan</h4>

            </div>

        </div>

    </div>

</div>

{{-- QUICK MENU --}}
<div class="row mb-4">

    <div class="col-md-3 mb-3">

        <a href="{{ url('/admin/bantuan') }}"
           class="card quick-card">

            <div class="card-body text-center">

                <i class="fas fa-box quick-icon text-primary"></i>

                <h5>Data Bantuan</h5>

            </div>

        </a>

    </div>

    <div class="col-md-3 mb-3">

        <a href="{{ url('/admin/event') }}"
           class="card quick-card">

            <div class="card-body text-center">

                <i class="fas fa-calendar-alt quick-icon text-success"></i>

                <h5>Event Bantuan</h5>

            </div>

        </a>

    </div>

    <div class="col-md-3 mb-3">

        <a href="{{ url('/admin/masyarakat') }}"
           class="card quick-card">

            <div class="card-body text-center">

                <i class="fas fa-users quick-icon text-warning"></i>

                <h5>Data Masyarakat</h5>

            </div>

        </a>

    </div>

    <div class="col-md-3 mb-3">

        <a href="{{ url('/admin/laporan') }}"
           class="card quick-card">

            <div class="card-body text-center">

                <i class="fas fa-chart-line quick-icon text-danger"></i>

                <h5>Laporan</h5>

            </div>

        </a>

    </div>

</div>

{{-- WELCOME --}}
<div class="card welcome-card">

    <div class="card-body p-4">

        <h2 class="mb-3">
            Selamat Datang Administrator 👋
        </h2>

        <p class="lead mb-0">

            Kelola data bantuan sosial, masyarakat,
            event bantuan, verifikasi pengajuan,
            penyaluran bantuan dan laporan
            melalui menu yang tersedia pada sidebar.

        </p>

    </div>

</div>

@endsection