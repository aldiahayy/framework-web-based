<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Bootstrap Website</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        .hero {
            background: linear-gradient(135deg, #dc3545, #ff6b6b);
            /* merah */
            color: white;
            padding: 100px 0;
        }

        .feature-icon {
            font-size: 40px;
            color: #dc3545;
            /* icon merah */
        }

        .btn-primary {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-primary:hover {
            background-color: #bb2d3b;
        }

        footer {
            background: #111;
            color: #bbb;
        }
    </style>
</head>

<body>



    @include('layout.header')
    @include('layout.navbar')
    @yield('content')
    @include('layout.navbar')


    <!-- ISI -->
    <section class="py-5">
        <div class="container">

            <div class="text-center mb-5">
                <h2 class="fw-bold">Fitur Website</h2>
                <p class="text-muted">Contoh tampilan card modern</p>
            </div>

            <div class="row g-4">

                <div class="col-md-4">
                    <div class="card border-0 shadow h-100 text-center p-4">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-laptop"></i>
                        </div>
                        <h5>Responsive</h5>
                        <p class="text-muted">Website dapat menyesuaikan dengan berbagai ukuran layar.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow h-100 text-center p-4">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-speedometer2"></i>
                        </div>
                        <h5>Cepat</h5>
                        <p class="text-muted">Bootstrap membantu membuat website lebih cepat dibuat.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card border-0 shadow h-100 text-center p-4">
                        <div class="feature-icon mb-3">
                            <i class="bi bi-palette"></i>
                        </div>
                        <h5>Modern</h5>
                        <p class="text-muted">Tampilan modern dengan komponen yang menarik.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION ARTIKEL -->
    <section class="bg-light py-5">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6">
                    <h2 class="fw-bold">Website Bootstrap Modern</h2>
                    <p class="text-muted">
                        Bootstrap adalah framework CSS yang membantu membuat website responsif
                        dan modern dengan cepat. Banyak developer menggunakan Bootstrap
                        untuk mempercepat proses pembuatan tampilan web.
                    </p>

                    <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>

                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085"
                        class="img-fluid rounded shadow">
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="text-center py-4">
        <div class="container">
            <p class="mb-1">© 2026 MyWebsite</p>
            <small>Dibuat menggunakan Bootstrap</small>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
```