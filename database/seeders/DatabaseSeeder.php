<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::turncate();


        User::factory(4)->create();
        Jurusan::factory(4)->create();
        // Mahasiswa::factory(4)->create()->Jurusan();
        // Mahasiswa::factory(4)->create()->each(function ($mahasiswa) {
        //     $jurusan = Jurusan::factory()->make();
        //     $mahasiswa->jurusan()->save($jurusan);
        // });

        // Mahasiswa::factory(4)->create();

    }
}
