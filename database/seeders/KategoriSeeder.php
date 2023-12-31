<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori')->insert(
            ['name' => 'Cabai Merah']
        );
        DB::table('kategori')->insert(
            ['name' => 'Bawang Merah']
        );
        DB::table('kategori')->insert(
            ['name' => 'Tomat']
        );
        DB::table('kategori')->insert(
            ['name' => 'Bawang Putih']
        );
    }
}
