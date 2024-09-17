<?php

namespace Database\Factories;

use App\Models\Exame;
use App\Models\Funcionario;
use App\Models\Medico;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consulta>
 */
class ConsultaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('pt_BR');

        return [
            'id_funcionario' => Funcionario::inRandomOrder()->first()->id,
            'id_medico' => Medico::inRandomOrder()->first()->id,
            'data_consulta' => $faker->dateTimeBetween('2010-01-01', 'now'),
            'id_exame' => Exame::inRandomOrder()->first()->id
        ];
    }
}
