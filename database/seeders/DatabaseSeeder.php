<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Paket;
use App\Models\Lapangan;
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
        
        Paket::create([
            'nama' => 'Paket 1 Jam',
            'lama' => 1,
            'harga' => 25000,
        ]);

        Paket::create([
            'nama' => 'Paket 4 Jam',
            'lama' => 4,
            'harga' => 85000,
        ]);

        Lapangan::create([
            'nama' => 'Lapangan 1',
            'foto' => '',
            'deskripsi' => 'Lapangan utama GOR Garuda Mataram',
        ]);

        Lapangan::create([
            'nama' => 'Lapangan 2',
            'foto' => '',
            'deskripsi' => 'Lapangan kedua GOR Garuda Mataram',
        ]);
    }
}
