<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $faker = FakerFactory::create('pt_BR');

        $nomeFantasia = $faker->company;
        return [
            'nome_fantasia' => $nomeFantasia,
            'cnpj' => $faker->regexify('[0-9]{2}[0-9]{3}[0-9]{3}[0-9]{4}[0-9]{2}'),
            'razao_social' => $faker->companySuffix() . ' ' . $nomeFantasia
        ];
    }
}
