@extends('layouts.master')

@section('content')

<div class="card">

    <!-- Header -->
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>Data Dosen</h5>
        <a href="{{ route('dosen.create') }}" class="btn btn-primary btn-sm">+ Tambah Dosen</a>
    </div>

    <!-- DESKTOP TABLE -->
    <div class="d-none d-md-block">
        <div class="table-responsive">
            <table class="table table-bordered table-striped mb-0">
                <thead class="table-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($dosens as $d)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $d->nip }}</td>
                        <td>{{ $d->nama }}</td>
                        <td>{{ $d->email }}</td>

                        <td class="text-center">
                            <a href="{{ route('dosen.edit',$d->id) }}" class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('dosen.destroy',$d->id) }}" method="POST" class="d-inline">
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

        @foreach($dosens as $d)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">

                <p class="mb-1"><strong>NIP:</strong> {{ $d->nip }}</p>
                <p class="mb-1"><strong>Nama:</strong> {{ $d->nama }}</p>
                <p class="mb-2"><strong>Email:</strong> {{ $d->email }}</p>

                <div class="d-flex gap-2">
                    <a href="{{ route('dosen.edit',$d->id) }}" class="btn btn-warning btn-sm w-50">Edit</a>

                    <form action="{{ route('dosen.destroy',$d->id) }}" method="POST" class="w-50">
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