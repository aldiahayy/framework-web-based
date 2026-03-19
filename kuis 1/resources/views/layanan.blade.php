@extends('layout.master')

@section('content')
<!-- ISI -->
<section class="py-5">
<div class="container">

<div class="text-center mb-5">
<h2 class="fw-bold">Ini adalah menu layanan</h2>
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


@endsection