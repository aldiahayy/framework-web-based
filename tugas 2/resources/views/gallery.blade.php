@extends('layouts.master')

@section('content')

<div class="container mt-5 mb-5">

    <h2 class="text-center mb-4">Gallery Coffee Shop</h2>
    <p class="text-center text-muted mb-5">Beberapa momen dan menu terbaik dari coffee shop kami</p>

    <div class="row g-4">

        <div class="col-md-4">
            <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93"
                class="img-fluid rounded shadow" style="height:250px; width:100%; object-fit:cover;">
        </div>

        <div class="col-md-4">
            <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735"
                class="img-fluid rounded shadow" style="height:250px; width:100%; object-fit:cover;">
        </div>

        <div class="col-md-4">
            <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096"
                class="img-fluid rounded shadow" style="height:250px; width:100%; object-fit:cover;">
        </div>

        <div class="col-md-4">
            <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31"
                class="img-fluid rounded shadow" style="height:250px; width:100%; object-fit:cover;">
        </div>

        <div class="col-md-4">
            <img src="https://images.unsplash.com/photo-1453614512568-c4024d13c247"
                class="img-fluid rounded shadow" style="height:250px; width:100%; object-fit:cover;">
        </div>

        <div class="col-md-4">
            <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348"
                class="img-fluid rounded shadow" style="height:250px; width:100%; object-fit:cover;">
        </div>
    </div>
</div>

@endsection