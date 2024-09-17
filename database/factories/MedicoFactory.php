<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medico>
 */
class MedicoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $faker = FakerFactory::create('pt_BR');
        $especialidades = [
            'Cardiologia',
            'Dermatologia',
            'Endocrinologia',
            'Gastroenterologia',
            'Geriatria',
            'Ginecologia',
            'Hematologia',
            'Infectologia',
            'Neurologia',
            'Nefrologia',
            'Oftalmologia',
            'Oncologia',
            'Ortopedia',
            'Otorrinolaringologia',
            'Pediatria',
            'Psiquiatria',
            'Radiologia',
            'Reumatologia',
            'Urologia',
            'Anestesiologia',
            'Cirurgia Geral',
            'Cirurgia Plástica',
            'Cirurgia Vascular',
            'Medicina de Família e Comunidade',
            'Medicina do Trabalho',
            'Medicina Esportiva',
            'Pneumologia',
            'Mastologia',
            'Imunologia',
            'Angiologia',
            'Fonoaudiologia',
            'Ginecologia e Obstetrícia',
            'Neurocirurgia',
            'Patologia',
            'Psicologia',
            'Reabilitação Física',
            'Radioterapia',
            'Traumatologia',
            'Toxicologia'
        ];
        $ufs = [
            'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 
            'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 
            'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'
        ];
        return [
            'nome' => $faker->name,
            'crm'=> $faker->regexify('[0-9]{6}'),
            'especialidade' => $faker->randomElement($especialidades),
            'uf' => $faker->randomElement($ufs)
        ];
    }
}
