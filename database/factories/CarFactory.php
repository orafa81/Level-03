<?php

namespace Database\Factories;

use App\Models\Locador;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    public function placaCarro(): string
    {
        
        $letras = strtoupper($this->faker->lexify('???'));

      
        $numeros = $this->faker->numerify('####');

      
        return "{$letras}{$numeros}";
    }
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'plate' => $this->placaCarro(),
            'mark' => $this->randomCarBrand(),
            'model' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 100, 10000),
            'description' => $this->faker->paragraphs(2, true),
            'release_date' => $this->faker->date(),
            'locador_id' => Locador::inRandomOrder()->first()->id // Cria um usuário automaticamente para cada post
        ];
    }

    public function randomCarBrand(): string
    {
        $brands = [
            'Volkswagen',
            'Ford',
            'Chevrolet',
            'Toyota',
            'Honda',
            'BMW',
            'Mercedes-Benz',
            'Audi',
            'Nissan',
            'Hyundai',
            'Kia',
            'Fiat',
            'Renault',
            'Peugeot',
            'Mazda',
        ];

        return $this->faker->randomElement($brands); 
    }
}
