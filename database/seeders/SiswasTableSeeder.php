<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            [
                'nama_lengkap'=>'Rakha',
                'jenis_kelamin'=>'L',
                'tanggal_lahir'=>'2009-3-23',
                'kelas'=>'XRpl',
            ],
            [
                'nama_lengkap'=>'jihad',
                'jenis_kelamin'=>'L',
                'tanggal_lahir'=>'2009-3-23',
                'kelas'=>'XRpl',
            ],
            [
                'nama_lengkap'=>'fakhri',
                'jenis_kelamin'=>'L',
                'tanggal_lahir'=>'2009-3-23',
                'kelas'=>'XRpl',
            ],
            [
                'nama_lengkap'=>'radit',
                'jenis_kelamin'=>'L',
                'tanggal_lahir'=>'2009-3-23',
                'kelas'=>'XRpl',
            ],
            [
                'nama_lengkap'=>'jauf',
                'jenis_kelamin'=>'L',
                'tanggal_lahir'=>'2009-3-23',
                'kelas'=>'XRpl',
            ],
            ]);
    }
}
