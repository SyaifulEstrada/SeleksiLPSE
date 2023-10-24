<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jurusan>
 */
class JurusanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        // $jurusan = fake()->randomElement(['Teknik Kimia', 'Teknik Sipil', 'Teknik Fisika', 'Teknik Informatika', 'Teknink Mesin']);

        // $jurusan = ['teknik mesin', 'teknik kapal', 'teknik sipil'];

        // $randJurusan = Array::random($jurusan);

        return [
            'kode_jurusan' => Str::random(2),
            'nama_jurusan' => fake()->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
