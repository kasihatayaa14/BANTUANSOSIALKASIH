<!-- Sidebar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Brand Logo -->
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ asset('images/logo.png') }}"
             alt="Logo"
             class="brand-image img-circle elevation-3"
             style="opacity:.8">

        <span class="brand-text font-weight-light">
            Bansos Kasih
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('images/user.png') }}"
                     class="img-circle elevation-2"
                     alt="User">
            </div>

            <div class="info">
                <a href="#" class="d-block">
                    {{ Auth::user()->name ?? 'Administrator' }}
                </a>
            </div>
        </div>

        <!-- Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false">

                <li class="nav-header">MENU UTAMA</li>

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                       class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-header">MASTER DATA</li>

                <!-- DATA BANTUAN -->
                <li class="nav-item">
                    <a href="{{ route('admin.bantuan.index') }}"
                       class="nav-link {{ request()->routeIs('admin.bantuan.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-hand-holding-heart"></i>
                        <p>Data Bantuan</p>
                    </a>
                </li>

                <!-- EVENT BANTUAN -->
                <li class="nav-item">
                    <a href="{{ route('admin.event-bantuan.index') ?? url('/admin/event-bantuan') }}"
                       class="nav-link {{ request()->is('admin/event-bantuan*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>Event Bantuan</p>
                    </a>
                </li>

                <!-- MASYARAKAT -->
                <li class="nav-item">
                    <a href="{{ url('/admin/masyarakat') }}"
                       class="nav-link {{ request()->is('admin/masyarakat*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Data Masyarakat</p>
                    </a>
                </li>

                <li class="nav-header">TRANSAKSI</li>

                <li class="nav-item">
                    <a href="{{ url('/admin/verifikasi') }}"
                       class="nav-link {{ request()->is('admin/verifikasi*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-check-circle"></i>
                        <p>Verifikasi Pengajuan</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ url('/admin/penyaluran') }}"
                       class="nav-link {{ request()->is('admin/penyaluran*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-truck"></i>
                        <p>Penyaluran Bantuan</p>
                    </a>
                </li>

                <li class="nav-header">LAPORAN</li>

                <li class="nav-item">
                    <a href="{{ url('/admin/laporan') }}"
                       class="nav-link {{ request()->is('admin/laporan*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-bar"></i>
                        <p>Laporan</p>
                    </a>
                </li>

                <!-- LOGOUT -->
                <li class="nav-item mt-3">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-block">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </button>
                    </form>
                </li>

            </ul>
        </nav>

    </div>
</aside>