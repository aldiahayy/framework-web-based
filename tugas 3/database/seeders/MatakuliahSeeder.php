<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\D0224043Matakuliah;

class MatakuliahSeeder extends Seeder{
    public function run(): void{
        D0224043Matakuliah::create([
            'kode_mk' => 'INF214323',
            'nama_mk' => 'Framework Web Based',
            'sks' => 3
        ]);

        D0224043Matakuliah::create([
            'kode_mk' => 'INF122323',
            'nama_mk' => 'Pemrograman Berorientasi Objek',
            'sks' => 3
        ]);
    }
}