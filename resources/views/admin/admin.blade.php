<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title','Dashboard Admin')</title>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- AdminLTE -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <style>

        body{
            background:#f4f7fc;
        }

        /* Sidebar */
        .main-sidebar{
            background: linear-gradient(180deg,#0f172a,#1e293b) !important;
        }

        .brand-link{
            border-bottom:1px solid rgba(255,255,255,.1)!important;
            text-align:center;
            padding:15px;
        }

        .brand-link .brand-text{
            font-size:20px;
            font-weight:700;
            color:#fff !important;
        }

        .user-panel{
            padding:15px;
            border-radius:15px;
            margin:15px;
            background:rgba(255,255,255,.08);
        }

        .user-panel .info a{
            color:#fff !important;
            font-weight:600;
        }

        /* Menu */
        .nav-sidebar .nav-link{
            margin:5px 10px;
            border-radius:12px;
            transition:.3s;
        }

        .nav-sidebar .nav-link:hover{
            background:#2563eb !important;
            color:white !important;
            transform:translateX(5px);
        }

        .nav-sidebar .nav-link.active{
            background:#2563eb !important;
            color:white !important;
        }

        /* Navbar */
        .main-header{
            border:none !important;
            background:white !important;
            box-shadow:0 2px 15px rgba(0,0,0,.05);
        }

        /* Content */
        .content-wrapper{
            background:#f4f7fc !important;
        }

        .content-header{
            padding:20px;
        }

        .content-header h1{
            font-weight:700;
            color:#1e293b;
        }

        /* Card */
        .card{
            border:none;
            border-radius:18px;
            box-shadow:0 5px 20px rgba(0,0,0,.06);
        }

        /* Footer */
        .main-footer{
            background:white;
            border-top:none;
            text-align:center;
            font-weight:600;
        }

        /* Header User */
        .top-user{
            margin-left:auto;
            margin-right:20px;
            font-weight:600;
            color:#64748b;
        }

        .welcome-badge{
            background:#eff6ff;
            color:#2563eb;
            padding:8px 15px;
            border-radius:20px;
        }

    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link"
                   data-widget="pushmenu"
                   href="#">

                    <i class="fas fa-bars"></i>

                </a>
            </li>
        </ul>

        <div class="top-user">

            <span class="welcome-badge">
                👋 Selamat datang, Administrator
            </span>

        </div>

    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar elevation-4">

        <a href="{{ route('admin.dashboard') }}"
           class="brand-link">

            <span class="brand-text">
                BANSOS KASIH
            </span>

        </a>

        <div class="sidebar">

            <div class="user-panel d-flex align-items-center">

                <div class="image">

                    <i class="fas fa-user-circle fa-3x text-white"></i>

                </div>

                <div class="info">

                    <a href="#">
                        Administrator
                    </a>

                    <small class="d-block text-success">
                        ● Online
                    </small>

                </div>

            </div>

            @include('layouts.sidebar')

        </div>

    </aside>

    <!-- Content -->
    <div class="content-wrapper">

        <section class="content-header">

            <div class="container-fluid">

                <h1>
                    @yield('title')
                </h1>

            </div>

        </section>

        <section class="content">

            <div class="container-fluid">

                @yield('content')

            </div>

        </section>

    </div>

    <!-- Footer -->
    <footer class="main-footer">

        <strong>
            Copyright © {{ date('Y') }}
        </strong>

        <span class="ml-2">
            Sistem Bantuan Sosial Kasih
        </span>

    </footer>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

</body>
</html>