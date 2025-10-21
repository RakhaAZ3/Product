<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use App\Models\Wali;

class RelasiSeeder extends Seeder
{
    public function run()
    {
        $mahasiswa = Mahasiswa::create([
            'nama' => 'Rakha A.Z',
            'nim' => '123456',
        ]);

        Wali::create([
            'nama' => 'Pak Agus',
            'id_mahasiswa' => $mahasiswa->id
        ]);
    }
}