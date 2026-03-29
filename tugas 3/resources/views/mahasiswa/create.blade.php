@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Tambah Mahasiswa</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="Masukkan NIM">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
            </div>

            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Masukkan Jurusan">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection