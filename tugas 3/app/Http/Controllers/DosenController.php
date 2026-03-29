<?php

namespace App\Http\Controllers;
use App\Models\D0224043Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller{
    public function index(){ // Menampilkan semua data dosen
        $dosens = D0224043Dosen::all();
        return view ('dosen.viewdata', compact('dosens'));
    }

    public function create(){ // Menampilkan form untuk menambahkan data dosen
        return view('dosen.create');
    }

    public function store(Request $request){ // Menyimpan data dosen yang baru ditambahkan
        D0224043Dosen::create($request->all());
        return redirect()->route('dosen.index');
    }

    public function show(string $id){
        //
    }

    public function edit(string $id){ // Menampilkan form untuk mengedit data dosen
        $dosen = D0224043Dosen::find($id);
        return view('dosen.edit', compact('dosen'));
    }

    public function update(Request $request, string $id){ // Menyimpan perubahan data dosen yang sudah diedit
        $dosen = D0224043Dosen::find($id);
        $dosen->update($request->all());
        return redirect()->route('dosen.index');
    }

    public function destroy(string $id){
        D0224043Dosen::destroy($id);
        return redirect()->route('dosen.index');
    }
}