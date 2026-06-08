<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Dashboard')</title>

    <!-- AdminLTE -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <style>
        .brand-text {
            font-weight: 600;
        }

        .small-box {
            border-radius: 12px;
        }

        .content-wrapper {
            background: #f4f6f9;
        }

        .main-sidebar {
            box-shadow: 0 0 10px rgba(0,0,0,.1);
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">

<div class="wrapper">

    <!-- NAVBAR -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <span class="nav-link text-sm">
                    👋 Selamat datang, Administrator
                </span>
            </li>
        </ul>
    </nav>

    <!-- SIDEBAR -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <a href="#" class="brand-link text-center">
            <span class="brand-text">Bansos Kasih</span>
        </a>

        <div class="sidebar">

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="info text-white">
                    Administrator
                </div>
            </div>

            @include('admin.sidebar')

        </div>
    </aside>

    <!-- CONTENT -->
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <h4 class="mb-0">@yield('title')</h4>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">

                @yield('content')

            </div>
        </section>

    </div>

    <!-- FOOTER -->
    <footer class="main-footer text-center">
        <strong>Copyright © {{ date('Y') }}</strong>
        <div class="float-right d-none d-sm-inline-block">
            Sistem Bantuan Sosial
        </div>
    </footer>

</div>

<!-- JS -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

</body>
</html>