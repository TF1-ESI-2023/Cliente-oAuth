<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BebidaFactory
 extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'tipo' => $this->faker->RandomElement(['Agua', 'Jugo', 'Soda','Cocucha','Whisky','Vino']),
            'capacidad' => $this->faker -> numberBetween(1,3),
            'precio' => $this->faker -> numberBetween(50,10000)
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
