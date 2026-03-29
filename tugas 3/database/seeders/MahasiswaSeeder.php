<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\D0224043Mahasiswa;

class MahasiswaSeeder extends Seeder{
    public function run(): void{
        D0224043Mahasiswa::create([
            'nim' => 'D0212001',
            'nama' => 'Andi Saputra',
            'jurusan' => 'Informatika'
        ]);

        D0224043Mahasiswa::create([
            'nim' => 'D0212002',
            'nama' => 'Budi Santoso',
            'jurusan' => 'Sistem Informasi'
        ]);
    }
}