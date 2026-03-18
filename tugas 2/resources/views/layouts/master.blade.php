<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8f1e7;
        }
            
        h1,h2,h3,h4{
            font-family: 'Playfair Display', serif;
        }
            

        .navbar-coffee {
            background: #6f4e37;
        }

        .btn-coffee {
            background: #6f4e37;
            color: white;
        }

        .btn-coffee:hover {
            background: #4e342e;
            color: white;
        }

        .card-coffee {
            height: 200px;
            margin: 5px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .card-body{
            align-items: center;
        }
    </style>
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- header -->
    @include('layouts.header')

    <!-- navigasi -->
    @include('layouts.navbar')

    <!-- content -->
    <div class="container mt-4 flex-fill">
        @yield('content')
    </div>

    <!-- footer -->
    @include('layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>