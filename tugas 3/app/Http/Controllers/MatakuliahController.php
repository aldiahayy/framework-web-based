<?php

namespace App\Http\Controllers;
use App\Models\D0224043Matakuliah;
use Illuminate\Http\Request;

class MatakuliahController extends Controller{
    public function index(){ // Menampilkan semua data matakuliah
        $matakuliahs = D0224043Matakuliah::all();
        return view('matakuliah.viewdata', compact('matakuliahs'));
    }

    public function create(){ // Menampilkan form untuk menambahkan data matakuliah
        return view('matakuliah.create');
    }

    public function store(Request $request){ // Menyimpan data matakuliah yang baru ditambahkan
        D0224043Matakuliah::create($request->all());
        return redirect()->route('matakuliah.index');
    }

    public function show(string $id){
        //
    }

    public function edit(string $id){ // Menampilkan form untuk mengedit data matakuliah
        $matakuliah = D0224043Matakuliah::find($id);
        return view('matakuliah.edit', compact('matakuliah'));
    }

    public function update(Request $request, string $id){ // Menyimpan perubahan data matakuliah yang sudah diedit
        $matakuliah = D0224043Matakuliah::find($id);
        $matakuliah->update($request->all());
        return redirect()->route('matakuliah.index');
    }

    public function destroy(string $id){ // Menghapus data matakuliah
        D0224043Matakuliah::destroy($id);
        return redirect()->route('matakuliah.index');
    }
}