@extends('layouts.master')

@section('content')

<div class="container mt-5 mb-5">

    <h2 class="text-center">Contact Us</h2>
    <p class="text-center mb-5">
        Hubungi kami jika ada pertanyaan atau ingin bekerja sama
    </p>

    <div class="row align-items-stretch">

        <!-- form -->
        <div class="col-md-6">
            <form>

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="Masukkan nama">
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Masukkan email">
                </div>

                <div class="mb-3">
                    <label class="form-label">Pesan</label>
                    <textarea class="form-control" rows="5" placeholder="Tulis pesan anda"></textarea>
                </div>

                <button class="btn btn-dark">
                    Kirim Pesan
                </button>

            </form>
        </div>

        <!-- card -->
        <div class="col-md-6 d-flex">
            <x-card>
                <h4 class="mb-4">Informasi Coffee Shop</h4>

                <p>
                    <i class="bi bi-geo-alt me-2"></i>
                    <strong>Alamat:</strong><br>
                    Jl. Kopi Nikmat No.10, Jakarta
                </p>

                <p>
                    <i class="bi bi-telephone me-2"></i>
                    <strong>Telepon:</strong><br>
                    0812-3456-7890
                </p>

                <p>
                    <i class="bi bi-envelope me-2"></i>
                    <strong>E-mail:</strong><br>
                    coffee@shop.com
                </p>

                <p>
                    <i class="bi bi-clock me-2"></i>
                    <strong>Jam Buka:</strong><br>
                    08:00 - 22:00
                </p>

            </x-card>
        </div>
    </div>
</div>

@endsection