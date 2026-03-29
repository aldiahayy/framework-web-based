@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Edit Mahasiswa</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" value="{{ $mahasiswa->jurusan }}">
            </div>

            <button type="submit" class="btn btn-warning">Update</button>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection