<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pegawais')->insert([
            [
                'image' => '/template/img/profile.png',
                'nama' => 'John',
                'tanggal' => now(),
                'komentar' => 'Ini adalah pegawai kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Dimas',
                'tanggal' => now(),
                'komentar' => 'Ini adalah pegawai kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Udin',
                'tanggal' => now(),
                'komentar' => 'Ini adalah pegawai kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Mad',
                'tanggal' => now(),
                'komentar' => 'Ini adalah pegawai kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Rina',
                'tanggal' => now(),
                'komentar' => 'Ini adalah pegawai kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Mas',
                'tanggal' => now(),
                'komentar' => 'Ini adalah pegawai kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Abdul',
                'tanggal' => now(),
                'komentar' => 'Ini adalah pegawai kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Anton',
                'tanggal' => now(),
                'komentar' => 'Ini adalah pegawai kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Bawan',
                'tanggal' => now(),
                'komentar' => 'Ini adalah pegawai kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Budi',
                'tanggal' => now(),
                'komentar' => 'Ini adalah pegawai kami'
            ],
            [
                'image' => '/template/img/profile.png',
                'nama' => 'Sugi',
                'tanggal' => now(),
                'komentar' => 'Ini adalah pegawai kami'
            ]
        ]);
    }
}