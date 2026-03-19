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
.hero{
    background: linear-gradient(135deg,#dc3545,#ff6b6b); /* merah */
    color:white;
    padding:100px 0;
}

.feature-icon{
    font-size:40px;
    color:#dc3545; /* icon merah */
}

.btn-primary{
    background-color:#dc3545;
    border-color:#dc3545;
}

.btn-primary:hover{
    background-color:#bb2d3b;
}

footer{
    background:#111;
    color:#bbb;
}
</style>
</head>

<body>

    @include('layout.header');
    @include('partials.navbar');
    
    @yield('content')
    @include('partials.footer');


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>