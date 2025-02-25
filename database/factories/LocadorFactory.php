<?php

namespace Database\Factories;

use App\Models\Locador;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Locador>
 */
class LocadorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    protected $model = Locador::class;

    
    public function definition(): array
    {
        $bairros = [
            'Centro', 'Vila Nova', 'Jardim das Flores', 'Boa Vista', 'Itaipava', 
            'São José', 'Alvorada', 'Parque das Águas', 'Bela Vista', 'Monte Alegre',
            'Rio Branco', 'Vila Progresso', 'Vila Rica', 'Vila Verde', 'Santa Clara'
        ];

        return [
            'store_name' => $this->faker->unique()->company(),
            'city' => $this->faker->city(),
            'cep' => $this->faker->postcode(),
            'road' => $this->faker->streetName(),
            'neighborhood' => $this->faker->randomElement($bairros),
            'state' => $this->faker->state(),
            'number' => $this->faker->buildingNumber(),
            'user_id' => User::factory(), // Cria um usuário automaticamente para cada post
        ];
    }
}
