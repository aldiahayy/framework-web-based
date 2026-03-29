@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Tambah Data Dosen</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('dosen.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection