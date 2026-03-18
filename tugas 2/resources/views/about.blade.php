@extends('layouts.master')

@section('content')

<div class="container mt-5 mb-5">
    <h2 class="text-center mb-4">About Our Coffee Shop</h2>
    <div class="row align-items-start">
        <div class="col-md-6">
            <img src="https://images.unsplash.com/photo-1442512595331-e89e73853f31"
                class="img-fluid rounded shadow" style="height:250px; width:100%; object-fit:cover;">
        </div>

        <div class="col-md-6">
            <h4>Fresh Coffee Every Day</h4>

            <p>
                Coffee Shop kami berdiri sejak tahun 2020 dengan tujuan
                menghadirkan kopi berkualitas tinggi dan suasana yang nyaman
                untuk semua pelanggan.
            </p>

            <p>
                Kami menggunakan biji kopi pilihan yang diproses dengan teknik
                terbaik untuk menghasilkan cita rasa kopi yang nikmat dan
                konsisten setiap hari.
            </p>

            <p>
                Selain kopi, kami juga menyediakan berbagai menu makanan ringan
                yang cocok dinikmati bersama secangkir kopi hangat.
            </p>
        </div>
    </div>
</div>

@endsection