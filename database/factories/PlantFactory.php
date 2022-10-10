<?php

namespace Database\Factories;

use App\Models\Categoria;
use App\Models\Tamaño;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->word();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(350),
            'extract' => $this->faker->text(50),
            'foto' => $this->faker->randomElement([
                'product1.jpg',
                'product2.jpg',
                'product3.jpg',
                'product4.jpg',
                'product5.jpg',
                'product6.jpg',
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
