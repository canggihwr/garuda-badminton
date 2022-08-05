<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Paket;
use App\Models\Lapangan;
use App\Models\Peralatan;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Canggih WR',
            'username' => 'cwr',
            'no_hp' => '083199487686',
            'tipe_akun' => 'Admin',
            'foto' => 'unnamed.jpg',
            'email' => 'cwr@gmail.com',
            'password' => bcrypt('c')
        ]);

        User::create([
            'name' => 'Alfandiansyah',
            'username' => 'alfa',
            'no_hp' => '0831199626222',
            'foto' => 'blank.png',
            'tipe_akun' => 'Member',
            'email' => 'alfan@gmail.com',
            'password' => bcrypt('1')
        ]);

        User::create([
            'name' => 'Rangga',
            'username' => 'rangga',
            'no_hp' => '0831199626222',
            'foto' => 'blank.png',
            'tipe_akun' => 'Member',
            'email' => 'alfan@gmail.com',
            'password' => bcrypt('r')
        ]);
        
        Paket::create([
            'nama' => 'Paket 1 Jam',
            'lama' => 1,
            'harga' => 25000,
        ]);

        Paket::create([
            'nama' => 'Paket 2 Jam',
            'lama' => 2,
            'harga' => 45000,
        ]);

        Paket::create([
            'nama' => 'Paket 3 Jam',
            'lama' => 3,
            'harga' => 65000,
        ]);

        Paket::create([
            'nama' => 'Paket 4 Jam',
            'lama' => 4,
            'harga' => 80000,
        ]);

        Lapangan::create([
            'nama' => 'Lapangan 1',
            'foto' => 'l1.jpg',
            'deskripsi' => 'Lapangan utama GOR Garuda Mataram',
        ]);

        Lapangan::create([
            'nama' => 'Lapangan 2',
            'foto' => 'l2.jpg',
            'deskripsi' => 'Lapangan kedua GOR Garuda Mataram',
        ]);

        Lapangan::create([
            'nama' => 'Lapangan 3',
            'foto' => 'l3.jpg',
            'deskripsi' => 'Lapangan ketiga GOR Garuda Mataram',
        ]);

        Peralatan::create([
            'nama' => 'Shuttlecock',
            'foto' => '3-128_2.png',
            'status' => 'Tersedia',
            'harga' => '5000',
            'deskripsi' => 'y',
            'restock' => '',
        ]);

        Peralatan::create([
            'nama' => 'wine',
            'foto' => '4.png',
            'status' => 'Tersedia',
            'harga' => '35000',
            'deskripsi' => 'q',
            'restock' => '',
        ]);

        Peralatan::create([
            'nama' => 'robo',
            'foto' => '22.png',
            'status' => 'Tersedia',
            'harga' => '45000',
            'deskripsi' => 'q',
            'restock' => '',
        ]);
    }
}
