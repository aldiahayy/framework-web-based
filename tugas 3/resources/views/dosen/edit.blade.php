@extends('layouts.master')

@section('content')

<div class="card">
    <div class="card-header">
        <h5>Edit Data Dosen</h5>
    </div>

    <div class="card-body">
        <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">NIP</label>
                <input type="text" name="nip" class="form-control" value="{{ $dosen->nip }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $dosen->nama }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" value="{{ $dosen->email }}">
            </div>

            <button type="submit" class="btn btn-warning">Update</button>
            <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>

@endsection