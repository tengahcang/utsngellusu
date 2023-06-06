<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            [
                'kode_tipe' => '2D',
                'nama_tipe' => 'NFT 2 Dimensi'
            ],
            [
                'kode_tipe' => '3D',
                'nama_tipe' => 'NFT 3 Dimensi'
            ]
        ]);
    }
}
