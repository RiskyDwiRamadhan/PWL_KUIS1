<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            [
            'image' => '/template/img/profile.png',
            'nama' => 'Risky Dwi Ramadhan',
            'tanggal' => now(),
            'komentar' => 'Minuman di sini enak - enak dan berkualitas sekali sesuai dengan harganya'],
            [
            'image' => '/template/img/profile.png',
            'nama' => 'Dimas Ilham Rivaldy',
            'tanggal' => now(),
            'komentar' => 'Suasananya sangat nyaman sekali dan tempatnya bagus'],
            [
            'image' => '/template/img/profile.png',
            'nama' => 'Khoirudin',
            'tanggal' => now(),
            'komentar' => 'Pelayanan disini sangat ramah sekali'],
            [
            'image' => '/template/img/profile.png',
            'nama' => 'Firman Ardiansyah',
            'tanggal' => now(),
            'komentar' => 'Suasananya sangat nyaman sekali dan tempatnya bagus'],
            [
            'image' => '/template/img/profile.png',
            'nama' => 'Sandrina',
            'tanggal' => now(),
            'komentar' => 'Suasananya sangat nyaman sekali dan tempatnya bagus'],
            [
            'image' => '/template/img/profile.png',
            'nama' => 'Siska Apriliani',
            'tanggal' => now(),
            'komentar' => 'Suasananya sangat nyaman sekali dan tempatnya bagus'],
            [
            'image' => '/template/img/profile.png',
            'nama' => 'Abdul Rachman',
            'tanggal' => now(),
            'komentar' => 'Minuman di sini enak - enak dan berkualitas sekali sesuai dengan harganya'],
            [
            'image' => '/template/img/profile.png',
            'nama' => 'Anton Santoso',
            'tanggal' => now(),
            'komentar' => 'Minuman di sini enak - enak dan berkualitas sekali sesuai dengan harganya'],
            [
            'image' => '/template/img/profile.png',
            'nama' => 'Benny Setiawan',
            'tanggal' => now(),
            'komentar' => 'Suasananya sangat nyaman sekali dan tempatnya bagus'],
            [
            'image' => '/template/img/profile.png',
            'nama' => 'Budiono',
            'tanggal' => now(),
            'komentar' => 'Suasananya sangat nyaman sekali dan tempatnya bagus']
        ]);
    }
}
