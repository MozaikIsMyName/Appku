<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Data>
 */
class DataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ID' => rand(1,9999999),
            'NIS' => fake()->nis(),
            'Nama' => fake()->nama(),
            'Tanggal Lahir' => fake()->tanggal_lahir(),
            'jenis Kelamin' => fake()->randomElements(['Laki-Laki', 'Perempuan']),
            'Alamat' => fake()->alamat(),
            'Kota' => fake()->kota(),

        ];
    }
}
