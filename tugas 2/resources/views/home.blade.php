@extends('layouts.master')

@section('content')

<div class="text-center mb-5">

    <h1>Welcome to Coffee Shop</h1>
    <p>Nikmati kopi terbaik setiap hari</p>

    <a href="/menu">
        <x-button>
            Lihat Menu
        </x-button>
    </a>
    
</div>

<div class="row mb-4">
    <div class="col-md-4">
        <div class="card card-coffee">
            <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                <h5>Espresso</h5>
                <p>Kopi hitam kuat dengan aroma khas.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-coffee">
            <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                <h5>Cappuccino</h5>
                <p>Perpaduan kopi, susu, dan foam.</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card card-coffee">
            <div class="card-body d-flex flex-column justify-content-center align-items-center text-center">
                <h5>Latte</h5>
                <p>Kopi lembut dengan susu segar.</p>
            </div>
        </div>
    </div>

</div>

@endsection