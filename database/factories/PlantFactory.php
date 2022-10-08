<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Tamaño;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plant>
 */
class PlantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->text(200),
            'foto' => $this->faker->randomElement([
                'cat1.jpg',
                'cat2.jpg',
                'cat3.jpg',
                'cat4.jpg',
            ]),
            'banner' => $this->faker->randomElement([
                'banner1.jpg',
                'banner2.jpg',
            ]),
            'precio' => $this->faker->randomElement([
                '10000',
                '30000',
                '25000',
                '3000',
            ]),
            'categoria_id' => Categoria::all()->random()->id,
            'tamaño_id' => Tamaño::all()->random()->id,

        ];
    }
}
