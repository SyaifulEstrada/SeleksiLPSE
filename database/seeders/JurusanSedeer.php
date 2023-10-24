<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSedeer extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Jurusan::truncat();
        // Mahasiswa::truncat();

        Jurusan::factory(5)
                ->has(Mahasiswa::factory()->count(1))
                ->create();
    }
}
