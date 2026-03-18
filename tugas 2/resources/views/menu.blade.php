@extends('layouts.master')

@section('content')

<div class="container mt-4 mb-5">
    <h2 class="text-center mb-4">Menu Coffee Shop</h2>

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93" class="card-img-top" style="height:250px; object-fit:cover;" alt="Espresso">
                <div class="card-body">
                    <h5 class="card-title">Espresso</h5>
                    <p class="card-text">Kopi hitam pekat dengan rasa kuat.</p>
                    <p class="text-danger fw-bold">Rp 15.000</p>
                    <a href="#">
                        <x-button>
                            Pesan
                        </x-button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735" class="card-img-top" style="height:250px; object-fit:cover;" alt="Latte">
                <div class="card-body">
                    <h5 class="card-title">Cafe Latte</h5>
                    <p class="card-text">Perpaduan espresso dan susu.</p>
                    <p class="text-danger fw-bold">Rp 20.000</p>
                    <a href="#">
                        <x-button>
                            Pesan
                        </x-button>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096" class="card-img-top" style="height:250px; object-fit:cover;" alt="Cappuccino">
                <div class="card-body">
                    <h5 class="card-title">Cappuccino</h5>
                    <p class="card-text">Kopi dengan foam susu lembut.</p>
                    <p class="text-danger fw-bold">Rp 22.000</p>
                    <a href="#">
                        <x-button>
                            Pesan
                        </x-button>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection