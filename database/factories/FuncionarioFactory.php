<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Funcionario>
 */
class FuncionarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = FakerFactory::create('pt_BR');

        $cargos = [
            'Analista de Sistemas',
            'Desenvolvedor de Software',
            'Engenheiro de Software',
            'Gerente de Projetos',
            'Coordenador de TI',
            'Analista de Suporte',
            'Administrador de Redes',
            'Gerente de TI',
            'Diretor de Tecnologia',
            'Desenvolvedor Front-end',
            'Desenvolvedor Back-end',
            'Desenvolvedor Full Stack',
            'Especialista em Segurança da Informação',
            'Analista de Banco de Dados',
            'Administrador de Banco de Dados',
            'Analista de Qualidade',
            'Testador de Software (QA)',
            'Gerente de Qualidade',
            'Engenheiro de Dados',
            'Cientista de Dados',
            'Engenheiro de Machine Learning',
            'Analista de Inteligência Artificial',
            'Programador Web',
            'Desenvolvedor Mobile',
            'Designer de Interface (UI)',
            'Designer de Experiência do Usuário (UX)',
            'Arquiteto de Soluções',
            'Arquiteto de Software',
            'Analista de Infraestrutura',
            'Especialista em Cloud Computing',
            'Consultor de Tecnologia',
            'Engenheiro de DevOps',
            'Técnico em Informática',
            'Técnico em Redes',
            'Coordenador de Infraestrutura',
            'Engenheiro de Redes',
            'Analista de Business Intelligence (BI)',
            'Consultor de ERP',
            'Gerente de Produto',
            'Product Owner',
            'Scrum Master',
            'Gerente de Operações',
            'Coordenador de Operações',
            'Gestor de Projetos',
            'Assistente Administrativo',
            'Analista Administrativo',
            'Coordenador Administrativo',
            'Diretor Administrativo',
            'Analista Financeiro',
            'Gerente Financeiro',
            'Controller',
            'Analista de Contas a Pagar',
            'Analista de Contas a Receber',
            'Analista de Crédito',
            'Consultor Financeiro',
            'Analista de Recursos Humanos',
            'Coordenador de Recursos Humanos',
            'Gerente de Recursos Humanos',
            'Recrutador',
            'Treinador Corporativo',
            'Analista de Treinamento e Desenvolvimento',
            'Analista de Comunicação Interna',
            'Analista de Marketing',
            'Coordenador de Marketing',
            'Gerente de Marketing',
            'Diretor de Marketing',
            'Assistente de Marketing',
            'Analista de Vendas',
            'Executivo de Vendas',
            'Consultor de Vendas',
            'Coordenador de Vendas',
            'Gerente de Vendas',
            'Diretor Comercial',
            'Supervisor de Call Center',
            'Operador de Telemarketing',
            'Analista de Suporte ao Cliente',
            'Gerente de Suporte ao Cliente',
            'Assistente de Logística',
            'Analista de Logística',
            'Coordenador de Logística',
            'Gerente de Logística',
            'Analista de Compras',
            'Comprador',
            'Gerente de Compras',
            'Especialista em Comércio Exterior',
            'Assistente de Comércio Exterior',
            'Coordenador de Comércio Exterior',
            'Analista de Pesquisa de Mercado',
            'Coordenador de Pesquisa de Mercado',
            'Gerente de Pesquisa de Mercado',
            'Analista de Compliance',
            'Coordenador de Compliance',
            'Especialista em Compliance',
            'Consultor Jurídico',
            'Advogado Corporativo',
            'Gerente Jurídico',
            'Diretor Jurídico',
            'Arquiteto',
            'Engenheiro Civil'
        ];


        return [
            'nome' => $faker->name,
            'cpf' => $faker->cpf(false),
            'telefone' => $faker->phoneNumber,
            'ocupacao' => $faker->randomElement($cargos),
            'id_empresa' => Empresa::inRandomOrder()->first()->id
        ];
    }
}
