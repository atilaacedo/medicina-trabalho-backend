<?php

namespace Database\Seeders;

use App\Models\EmissaoAtestado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmissaoAtestadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batchSize = 1000;
        $totalRecords = 100000;
        for($i = 0; $i < $totalRecords; $i += $batchSize){
            EmissaoAtestado::factory($batchSize)->create();
            gc_collect_cycles();
        }
    }
}
