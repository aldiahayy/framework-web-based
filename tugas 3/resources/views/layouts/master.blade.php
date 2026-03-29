<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Akademik</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f5f6fa;
        }

        .sidebar {
            height: 100vh;
            background: #343a40;
        }

        .sidebar a {
            color: #fff;
            display: block;
            padding: 10px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background: #495057;
        }

        @media (max-width: 576px) {
            .table td, .table th {
                font-size: 12px;
                padding: 6px;
            }
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    
<div class="container-fluid">
    <div class="row">

            @include('layouts.navbar')

            <div class="container mt-4 mb-5">

                @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @yield('content')
            </div>

            @include('layouts.footer')

            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>