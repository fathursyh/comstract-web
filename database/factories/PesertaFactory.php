<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Peserta>
 */
class PesertaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tahun_kebelakang = (int) Carbon::now()->subYears(4)->format('y');
        $tahun_sekarang = (int) Carbon::now()->format('y');

        $npm = null;
        $nik = null;
        
        if (fake()->boolean(70)) {
            $angkatan = (string) fake()->numberBetween($tahun_kebelakang, $tahun_sekarang);
            
            $npm = '06' . fake()->randomElement(['5', '4']) . '1' . (string) $angkatan . (string) fake()->unique()->randomNumber(3, true);
        } else {
            $nik = fake()->unique()->nik();
        }

        $gender = fake()->randomElement(['male', 'female']);

        return [
            'npm' => $npm,
            'nik' => $nik,
            'name' => fake()->name($gender),
            'email' => fake()->unique()->email(),
            'telepon' => fake()->unique()->e164PhoneNumber(),
            'jenis_kelamin' => $gender === 'male' ? 'l' : 'p'
        ];
    }
}
