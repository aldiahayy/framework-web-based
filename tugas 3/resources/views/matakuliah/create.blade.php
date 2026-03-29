@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Tambah Mata Kuliah</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('matakuliah.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Kode MK</label>
                <input type="text" name="kode_mk" class="form-control" placeholder="Masukkan Kode MK">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama MK</label>
                <input type="text" name="nama_mk" class="form-control" placeholder="Masukkan Nama Mata Kuliah">
            </div>

            <div class="mb-3">
                <label class="form-label">SKS</label>
                <input type="number" name="sks" class="form-control" placeholder="Masukkan SKS">
            </div>

            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection