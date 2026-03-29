<?php

namespace App\Http\Controllers;
use App\Models\D0224043Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller{
    public function index(){ // Menampilkan semua data mahasiswa
        $mahasiswas = D0224043Mahasiswa::all();
        return view('mahasiswa.viewdata', compact('mahasiswas'));
    }

    public function create(){ // Menampilkan form untuk menambahkan data mahasiswa
        return view('mahasiswa.create');
    }

    public function store(Request $request){ // Menyimpan data mahasiswa yang baru ditambahkan
        D0224043Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function show(string $id){
        //
    }

    public function edit(string $id){ // Menampilkan form untuk mengedit data mahasiswa
        $mahasiswa = D0224043Mahasiswa::find($id);
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, string $id){ // Menyimpan perubahan data mahasiswa yang sudah diedit
        $mahasiswa = D0224043Mahasiswa::find($id);
        $mahasiswa->update($request->all());
        return redirect()->route('mahasiswa.index');
    }

    public function destroy(string $id){ // Menghapus data mahasiswa
        D0224043Mahasiswa::destroy($id);
        return redirect()->route('mahasiswa.index');
    }
}