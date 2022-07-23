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
            'email' => 'cwr@gmail.com',
            'password' => bcrypt('c')
        ]);

        User::create([
            'name' => 'Alfandiansyah',
            'username' => 'alfa',
            'no_hp' => '0831199626222',

            'email' => 'alfan@gmail.com',
            'password' => bcrypt('1')
        ]);
        
        Paket::create([
            'nama' => 'Paket 1 Jam',
            'waktu_main' => 1,
            'harga' => 25000,
        ]);

        Lapangan::create([
            'nama' => 'Lapangan 1',
            'deskripsi' => 'Lapangan utama GOR Garuda Mataram',
        ]);
    }
}
