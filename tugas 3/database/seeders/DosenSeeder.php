<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\D0224043Dosen;

class DosenSeeder extends Seeder{
    public function run(): void{
        D0224043Dosen::create([
            'nip' => '123456',
            'nama' => 'Dr. Ahmad',
            'email' => 'ahmad@kampus.ac.id'
        ]);

        D0224043Dosen::create([
            'nip' => '654321',
            'nama' => 'Prof. Budi',
            'email' => 'budi@kampus.ac.id'
        ]);

        D0224043Dosen::create([
            'nip' => '789456',
            'nama' => 'Dr. Siti',
            'email' => 'siti@kampus.ac.id'
        ]);
    }
}
