<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Abdulloh',
                'tanggal' => now(),
                'komentar' => 'Ini adalah supplier kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Awang',
                'tanggal' => now(),
                'komentar' => 'Ini adalah supplier kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Aqil',
                'tanggal' => now(),
                'komentar' => 'Ini adalah supplier kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Lif',
                'tanggal' => now(),
                'komentar' => 'Ini adalah supplier kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Syukriansah',
                'tanggal' => now(),
                'komentar' => 'Ini adalah supplier kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Mid',
                'tanggal' => now(),
                'komentar' => 'Ini adalah supplier kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Abdul',
                'tanggal' => now(),
                'komentar' => 'Ini adalah supplier kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Ham',
                'tanggal' => now(),
                'komentar' => 'Ini adalah supplier kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Awan',
                'tanggal' => now(),
                'komentar' => 'Ini adalah supplier kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Toro',
                'tanggal' => now(),
                'komentar' => 'Ini adalah supplier kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Ibrahim',
                'tanggal' => now(),
                'komentar' => 'Ini adalah supplier kami'
            ]
        ]);
    }
}