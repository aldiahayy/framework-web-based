@extends('layouts.master')

@section('content')

<div class="container mt-5 mb-5">

    <h2 class="text-center mb-4">Promo Spesial</h2>
    <p class="text-center text-muted mb-5">Nikmati promo menarik dari Coffee Shop kami</p>

    <div class="row g-4">

        <div class="col-md-4">
            <div class="card shadow h-100">
                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93"
                    class="card-img-top" style="height:250px; object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Promo Espresso</h5>
                    <p class="card-text">Diskon 30% untuk pembelian Espresso hari ini.</p>
                    <p class="text-danger fw-bold">Rp 10.000</p>
                    <a href="#">
                        <x-button>
                            Ambil Promo
                        </x-button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow h-100">
                <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735"
                    class="card-img-top" style="height:250px; object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Buy 1 Get 1 Latte</h5>
                    <p class="card-text">Beli 1 Latte gratis 1 Latte khusus hari Jumat.</p>
                    <p class="text-danger fw-bold">Special Offer</p>
                    <a href="#">
                        <x-button>
                            Ambil Promo
                        </x-button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow h-100">
                <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096"
                    class="card-img-top" style="height:250px; object-fit:cover;">
                <div class="card-body text-center">
                    <h5 class="card-title">Cappuccino Weekend</h5>
                    <p class="card-text">Diskon 20% untuk Cappuccino setiap weekend.</p>
                    <p class="text-danger fw-bold">Rp 18.000</p>
                    <a href="#">
                        <x-button>
                            Ambil Promo
                        </x-button>
                    </a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection