<?php

namespace Database\Factories;

use App\Models\Jurusan;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $jekel = fake()->randomElement(['laki-laki', 'perempuan']);

        // $jurusan = Jurusan::all('jurusan');

        return [
            'nim' => fake()->randomNumber(5, true),
            'nama' => fake()->name(function (Array $jekel) {return $jekel['jekel'];}),
            'alamat' => fake()->address(),
            'jekel' => $jekel,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
