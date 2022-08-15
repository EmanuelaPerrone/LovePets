<?php

namespace Database\Factories;

use App\Models\Associazione;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AssociazioneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = \App\Models\Associazione::class;

    public function definition()
    {
        return [
            'nome' => $this->faker->name(),
            'cf' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'telefono' => rand(1111111111, 9999999999),
            'sede' => $this->faker->name(),
            'anno' => rand(1999, 2021),
            'soci' => rand(1, 30),
            'zonaCompetenza' => $this->faker->name(),
            'animali' => $this->faker->name(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
            'created_at' => now(),
        ];
    }
}
