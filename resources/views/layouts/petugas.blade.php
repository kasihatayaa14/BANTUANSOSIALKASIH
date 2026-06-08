<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas - Sistem Bantuan Sosial Kasih</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">

            <a class="navbar-brand" href="{{ route('petugas.dashboard') }}">
                Petugas
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav me-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('petugas.dashboard') }}">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pengambilan.index') }}">
                            Pengambilan
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('penyaluran.index') }}">
                            Penyaluran
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('petugas.event') }}">
                            Event Bantuan
                        </a>
                    </li>

                </ul>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">
                        Logout
                    </button>
                </form>

            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container mt-4">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>