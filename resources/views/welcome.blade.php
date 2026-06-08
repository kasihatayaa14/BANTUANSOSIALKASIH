<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Bantuan Sosial</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background: #f8f9fa;
        }

        .hero{
            min-height: 90vh;
            display: flex;
            align-items: center;
        }

        .hero-title{
            font-size: 3rem;
            font-weight: bold;
        }

        .hero-subtitle{
            font-size: 1.2rem;
            color: #6c757d;
        }

        .feature-card{
            transition: 0.3s;
        }

        .feature-card:hover{
            transform: translateY(-5px);
        }

        footer{
            background: #212529;
            color: white;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                Bantuan Sosial
            </a>

            <div>
                <a href="{{ route('login') }}" class="btn btn-light">
                    Login
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <h1 class="hero-title">
                        Sistem Informasi Bantuan Sosial
                    </h1>

                    <p class="hero-subtitle mt-3">
                        Aplikasi untuk pengelolaan bantuan sosial mulai dari
                        pengajuan, verifikasi, penyaluran hingga pelaporan
                        secara transparan dan terintegrasi.
                    </p>

                    <a href="{{ route('login') }}" class="btn btn-success btn-lg mt-3">
                        Masuk Sistem
                    </a>
                </div>

                <div class="col-md-6 text-center">
                    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                         width="350"
                         alt="Bantuan Sosial">
                </div>

            </div>
        </div>
    </section>

    <!-- Fitur -->
    <section class="py-5 bg-white">
        <div class="container">

            <h2 class="text-center mb-5">
                Fitur Utama
            </h2>

            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="card feature-card shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4>Pengajuan</h4>
                            <p>
                                Masyarakat dapat mengajukan bantuan secara online.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card feature-card shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4>Penyaluran</h4>
                            <p>
                                Monitoring proses distribusi bantuan secara real-time.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card feature-card shadow-sm h-100">
                        <div class="card-body text-center">
                            <h4>Laporan</h4>
                            <p>
                                Laporan bantuan yang akurat dan transparan.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p class="mb-0">
            © {{ date('Y') }} Sistem Informasi Bantuan Sosial
        </p>
    </footer>

</body>
</html>