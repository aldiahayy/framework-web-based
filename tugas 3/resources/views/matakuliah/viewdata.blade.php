@extends('layouts.master')

@section('content')

<div class="card">

    <!-- Header -->
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>Data Mata Kuliah</h5>
        <a href="{{ route('matakuliah.create') }}" class="btn btn-primary btn-sm">+ Tambah Mata Kuliah</a>
    </div>

    <!-- DESKTOP TABLE -->
    <div class="d-none d-md-block">
        <div class="table-responsive">
            <table class="table table-bordered table-striped mb-0">
                <thead class="table-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>Kode MK</th>
                        <th>Nama MK</th>
                        <th>SKS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($matakuliahs as $m)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $m->kode_mk }}</td>
                        <td>{{ $m->nama_mk }}</td>
                        <td>{{ $m->sks }}</td>

                        <td class="text-center">
                            <a href="{{ route('matakuliah.edit',$m->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('matakuliah.destroy',$m->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- MOBILE CARD -->
    <div class="d-md-none p-3">

        @foreach($matakuliahs as $m)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">

                <p class="mb-1"><strong>Kode MK:</strong> {{ $m->kode_mk }}</p>
                <p class="mb-1"><strong>Nama MK:</strong> {{ $m->nama_mk }}</p>
                <p class="mb-2"><strong>SKS:</strong> {{ $m->sks }}</p>

                <div class="d-flex gap-2">
                    <a href="{{ route('matakuliah.edit',$m->id) }}" class="btn btn-warning btn-sm w-50">Edit</a>

                    <form action="{{ route('matakuliah.destroy',$m->id) }}" method="POST" class="w-50">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm w-100">
                            Hapus
                        </button>
                    </form>
                </div>

            </div>
        </div>
        @endforeach

    </div>

</div>

@endsection