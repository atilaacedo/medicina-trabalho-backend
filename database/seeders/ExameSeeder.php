<?php

namespace Database\Seeders;

use App\Models\Exame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exames = [
            ['nome' => 'Hemograma Completo', 'valor' => 80.00],
            ['nome' => 'Eletrocardiograma', 'valor' => 120.00],
            ['nome' => 'Raio-X', 'valor' => 150.00],
            ['nome' => 'Tomografia Computadorizada', 'valor' => 350.00],
            ['nome' => 'Ressonância Magnética', 'valor' => 500.00],
            ['nome' => 'Ultrassonografia', 'valor' => 90.00],
            ['nome' => 'Teste de Esforço', 'valor' => 200.00],
            ['nome' => 'Endoscopia Digestiva', 'valor' => 250.00],
            ['nome' => 'Colonoscopia', 'valor' => 280.00],
            ['nome' => 'Exame de Urina', 'valor' => 40.00],
            ['nome' => 'Exame de Fezes', 'valor' => 50.00],
            ['nome' => 'Glicemia em Jejum', 'valor' => 60.00],
            ['nome' => 'Teste de Colesterol', 'valor' => 70.00],
            ['nome' => 'Ecocardiograma', 'valor' => 180.00],
            ['nome' => 'Densitometria Óssea', 'valor' => 220.00],
            ['nome' => 'Mamografia', 'valor' => 160.00],
            ['nome' => 'Papanicolau', 'valor' => 90.00],
            ['nome' => 'PSA (Antígeno Prostático Específico)', 'valor' => 100.00],
            ['nome' => 'Exame de Creatinina', 'valor' => 55.00],
            ['nome' => 'Exame de Tireoide (TSH)', 'valor' => 75.00],
            ['nome' => 'Audiometria', 'valor' => 130.00],
            ['nome' => 'Espirometria', 'valor' => 140.00],
            ['nome' => 'Eletroencefalograma (EEG)', 'valor' => 200.00],
            ['nome' => 'Cintilografia', 'valor' => 300.00],
            ['nome' => 'Polissonografia', 'valor' => 400.00],
            ['nome' => 'Exame de Vitamina D', 'valor' => 95.00],
            ['nome' => 'Exame de Triglicerídeos', 'valor' => 65.00],
            ['nome' => 'Exame de Ferro', 'valor' => 60.00],
            ['nome' => 'Exame de Ácido Úrico', 'valor' => 70.00],
            ['nome' => 'Exame de Função Hepática', 'valor' => 85.00],
            ['nome' => 'Biópsia', 'valor' => 350.00],
            ['nome' => 'Exame de Gasometria Arterial', 'valor' => 120.00],
            ['nome' => 'Sorologia para HIV', 'valor' => 130.00],
            ['nome' => 'Teste de Coagulação', 'valor' => 90.00],
            ['nome' => 'Testes Hormonais', 'valor' => 150.00],
            ['nome' => 'Prova de Função Respiratória', 'valor' => 180.00],
            ['nome' => 'Holter 24 horas', 'valor' => 250.00],
            ['nome' => 'Cateterismo', 'valor' => 400.00],
            ['nome' => 'Teste de Paternidade (DNA)', 'valor' => 500.00],
            ['nome' => 'Teste Ergométrico', 'valor' => 170.00],
            ['nome' => 'Teste de Alergia', 'valor' => 140.00],
            ['nome' => 'Exame de Colesterol LDL', 'valor' => 80.00],
            ['nome' => 'Exame de Colesterol HDL', 'valor' => 85.00],
            ['nome' => 'Glicemia Pós-Prandial', 'valor' => 65.00],
            ['nome' => 'Creatinina Sérica', 'valor' => 70.00],
            ['nome' => 'Albumina', 'valor' => 75.00],
            ['nome' => 'Bilirrubina Total', 'valor' => 60.00],
            ['nome' => 'Bilirrubina Direta', 'valor' => 65.00],
            ['nome' => 'Bilirrubina Indireta', 'valor' => 70.00],
            ['nome' => 'Sódio Sérico', 'valor' => 50.00],
            ['nome' => 'Potássio Sérico', 'valor' => 55.00],
            ['nome' => 'Cloro Sérico', 'valor' => 55.00],
            ['nome' => 'Cálcio Total', 'valor' => 60.00],
            ['nome' => 'Fósforo Sérico', 'valor' => 65.00],
            ['nome' => 'Magnésio Sérico', 'valor' => 70.00],
            ['nome' => 'Amiloide', 'valor' => 90.00],
            ['nome' => 'Proteína C-reativa', 'valor' => 85.00],
            ['nome' => 'Anticorpos Antinucleares', 'valor' => 100.00],
            ['nome' => 'Anticorpos Anti-DNA', 'valor' => 110.00],
            ['nome' => 'Anticorpos Anticardiolipina', 'valor' => 120.00],
            ['nome' => 'Teste de VDRL', 'valor' => 90.00],
            ['nome' => 'Anticorpos Anti-HBs', 'valor' => 100.00],
            ['nome' => 'Anticorpos Anti-HCV', 'valor' => 110.00],
            ['nome' => 'Anticorpos Anti-HIV', 'valor' => 120.00],
            ['nome' => 'Anticorpos Anti-HTLV', 'valor' => 130.00],
            ['nome' => 'Anticorpos Anti-EBV', 'valor' => 140.00],
            ['nome' => 'Anticorpos Anti-H. pylori', 'valor' => 150.00],
            ['nome' => 'Citoquímica de Fezes', 'valor' => 70.00],
            ['nome' => 'Microbiologia de Fezes', 'valor' => 80.00],
            ['nome' => 'Parasitologia de Fezes', 'valor' => 75.00],
            ['nome' => 'Exame de Fezes para Sangue Oculto', 'valor' => 65.00],
            ['nome' => 'Ultrassonografia Abdominal', 'valor' => 100.00],
            ['nome' => 'Ultrassonografia Obstétrica', 'valor' => 110.00],
            ['nome' => 'Ultrassonografia Pélvica', 'valor' => 120.00],
            ['nome' => 'Ultrassonografia Transvaginal', 'valor' => 130.00],
            ['nome' => 'Ultrassonografia Cardíaca', 'valor' => 140.00],
            ['nome' => 'Tomografia de Tórax', 'valor' => 250.00],
            ['nome' => 'Tomografia Abdominal', 'valor' => 270.00],
            ['nome' => 'Tomografia de Coluna', 'valor' => 280.00],
            ['nome' => 'Ressonância Magnética de Tórax', 'valor' => 320.00],
            ['nome' => 'Ressonância Magnética de Coluna', 'valor' => 340.00],
            ['nome' => 'Ressonância Magnética de Joelho', 'valor' => 360.00],
            ['nome' => 'Raio-X de Tórax', 'valor' => 90.00],
            ['nome' => 'Raio-X de Coluna', 'valor' => 100.00],
            ['nome' => 'Raio-X de Pelve', 'valor' => 110.00],
            ['nome' => 'Raio-X de Mão', 'valor' => 80.00],
            ['nome' => 'Raio-X de Ombro', 'valor' => 90.00],
            ['nome' => 'Endoscopia Nasal', 'valor' => 150.00],
            ['nome' => 'Endoscopia Laringe', 'valor' => 160.00],
            ['nome' => 'Endoscopia Brônquica', 'valor' => 180.00],
            ['nome' => 'Endoscopia Urológica', 'valor' => 200.00],
            ['nome' => 'Cistoscopia', 'valor' => 220.00],
            ['nome' => 'Colonografia por Tomografia', 'valor' => 300.00],
            ['nome' => 'Videoendoscopia', 'valor' => 350.00],
            ['nome' => 'Exame de Urina com Microscopia', 'valor' => 70.00],
            ['nome' => 'Exame de Urina com Cultura', 'valor' => 80.00],
            ['nome' => 'Exame de Urina com Sedimento', 'valor' => 75.00],
            ['nome' => 'Cultura de Fezes', 'valor' => 85.00],
            ['nome' => 'Testes de Função Hepática', 'valor' => 90.00],
            ['nome' => 'Função Renal', 'valor' => 95.00],
            ['nome' => 'Função Tireoidiana', 'valor' => 100.00],
            ['nome' => 'Exame de Imunoglobulinas', 'valor' => 105.00],
            ['nome' => 'Exame de Autoanticorpos', 'valor' => 110.00],
            ['nome' => 'Exame de Anticorpos Anti-Reticulina', 'valor' => 115.00],
            ['nome' => 'Exame de Anticorpos Anti-Sm', 'valor' => 120.00],
            ['nome' => 'Exame de Anticorpos Anti-Ro', 'valor' => 125.00],
            ['nome' => 'Exame de Anticorpos Anti-La', 'valor' => 130.00],
            ['nome' => 'Exame de Anticorpos Anti-CCP', 'valor' => 135.00],
            ['nome' => 'Exame de Anticorpos Anti-Mito', 'valor' => 140.00],
            ['nome' => 'Exame de Anticorpos Anti-Scl-70', 'valor' => 145.00],
            ['nome' => 'Exame de Anticorpos Anti-Jo-1', 'valor' => 150.00],
            ['nome' => 'Exame de Anticorpos Anti-dsDNA', 'valor' => 155.00],
            ['nome' => 'Exame de Proteína Total', 'valor' => 160.00],
            ['nome' => 'Exame de Albumina', 'valor' => 165.00],
            ['nome' => 'Exame de Globulinas', 'valor' => 170.00],
            ['nome' => 'Exame de Transferrina', 'valor' => 175.00],
            ['nome' => 'Exame de Ferritina', 'valor' => 180.00],
            ['nome' => 'Exame de Hepatite B', 'valor' => 185.00],
            ['nome' => 'Exame de Hepatite C', 'valor' => 190.00],
            ['nome' => 'Exame de Hepatite D', 'valor' => 195.00],
            ['nome' => 'Exame de Hepatite E', 'valor' => 200.00],
            ['nome' => 'Exame de Sífilis', 'valor' => 70.00],
            ['nome' => 'Exame de Chlamydia', 'valor' => 80.00],
            ['nome' => 'Exame de Gonorreia', 'valor' => 85.00],
            ['nome' => 'Exame de Herpes Simplex', 'valor' => 90.00],
            ['nome' => 'Exame de Citomegalovírus', 'valor' => 95.00],
            ['nome' => 'Exame de Epstein-Barr', 'valor' => 100.00],
            ['nome' => 'Exame de Toxoplasmose', 'valor' => 105.00],
            ['nome' => 'Exame de Rubéola', 'valor' => 110.00],
            ['nome' => 'Exame de Sarampo', 'valor' => 115.00],
            ['nome' => 'Exame de Parotidite', 'valor' => 120.00],
            ['nome' => 'Exame de Varicela', 'valor' => 125.00],
            ['nome' => 'Exame de Toxocara', 'valor' => 130.00],
            ['nome' => 'Exame de Giardia', 'valor' => 135.00],
            ['nome' => 'Exame de Entamoeba histolytica', 'valor' => 140.00],
            ['nome' => 'Exame de Ascaris', 'valor' => 145.00],
            ['nome' => 'Exame de Strongyloides', 'valor' => 150.00],
            ['nome' => 'Exame de Ancylostoma', 'valor' => 155.00],
            ['nome' => 'Exame de Trichuris', 'valor' => 160.00],
            ['nome' => 'Exame de Opistorquíase', 'valor' => 165.00],
            ['nome' => 'Exame de Schistosomose', 'valor' => 170.00],
            ['nome' => 'Exame de Esquistossomose', 'valor' => 175.00],
            ['nome' => 'Exame de Filaríase', 'valor' => 180.00],
            ['nome' => 'Exame de Lúpus', 'valor' => 185.00],
            ['nome' => 'Exame de Esclerose Múltipla', 'valor' => 190.00],
            ['nome' => 'Exame de Síndrome de Sjögren', 'valor' => 195.00],
            ['nome' => 'Exame de Artrite Reumatoide', 'valor' => 200.00],
            ['nome' => 'Exame de Psoríase', 'valor' => 70.00],
            ['nome' => 'Exame de Vitiligo', 'valor' => 80.00],
            ['nome' => 'Exame de Acne', 'valor' => 85.00],
            ['nome' => 'Exame de Rosácea', 'valor' => 90.00],
            ['nome' => 'Exame de Dermatite', 'valor' => 95.00],
            ['nome' => 'Exame de Eczema', 'valor' => 100.00],
            ['nome' => 'Exame de Melasma', 'valor' => 105.00],
            ['nome' => 'Exame de Dermatofitose', 'valor' => 110.00],
            ['nome' => 'Exame de Onicomicose', 'valor' => 115.00],
            ['nome' => 'Exame de Impetigo', 'valor' => 120.00],
            ['nome' => 'Exame de Herpes Zoster', 'valor' => 125.00],
            ['nome' => 'Exame de Eczema Atópico', 'valor' => 130.00],
            ['nome' => 'Exame de Papilomatose', 'valor' => 135.00],
            ['nome' => 'Exame de Síndrome de Stevens-Johnson', 'valor' => 140.00],
            ['nome' => 'Exame de Síncope', 'valor' => 145.00],
            ['nome' => 'Exame de Arritmias', 'valor' => 150.00],
            ['nome' => 'Exame de Doença Arterial Coronariana', 'valor' => 155.00],
            ['nome' => 'Exame de Miocardiopatia', 'valor' => 160.00],
            ['nome' => 'Exame de Insuficiência Cardíaca', 'valor' => 165.00],
            ['nome' => 'Exame de Valvulopatia', 'valor' => 170.00],
            ['nome' => 'Exame de Doença Cardíaca Congênita', 'valor' => 175.00],
            ['nome' => 'Exame de Hipertensão Pulmonar', 'valor' => 180.00],
            ['nome' => 'Exame de Trombose Venosa Profunda', 'valor' => 185.00],
            ['nome' => 'Exame de Embolia Pulmonar', 'valor' => 190.00],
            ['nome' => 'Exame de Aneurisma', 'valor' => 195.00],
            ['nome' => 'Exame de Doença Arterial Periférica', 'valor' => 200.00],
            ['nome' => 'Exame de Arterite Temporal', 'valor' => 70.00],
            ['nome' => 'Exame de Vasculite', 'valor' => 80.00],
            ['nome' => 'Exame de Flebite', 'valor' => 85.00],
            ['nome' => 'Exame de Síndrome de Raynaud', 'valor' => 90.00],
            ['nome' => 'Exame de Doença de Buerger', 'valor' => 95.00],
            ['nome' => 'Exame de Esclerodermia', 'valor' => 100.00],
            ['nome' => 'Exame de Doença de Behçet', 'valor' => 105.00],
            ['nome' => 'Exame de Doença de Kawasaki', 'valor' => 110.00],
            ['nome' => 'Exame de Lupus Eritematoso Sistêmico', 'valor' => 115.00],
            ['nome' => 'Exame de Esclerose Sistêmica', 'valor' => 120.00],
            ['nome' => 'Exame de Dermatomiosite', 'valor' => 125.00],
            ['nome' => 'Exame de Polimiosite', 'valor' => 130.00],
            ['nome' => 'Exame de Fibromialgia', 'valor' => 135.00],
            ['nome' => 'Exame de Síndrome da Fadiga Crônica', 'valor' => 140.00],
            ['nome' => 'Exame de Síndrome de Ehlers-Danlos', 'valor' => 145.00],
            ['nome' => 'Exame de Síndrome de Marfan', 'valor' => 150.00],
            ['nome' => 'Exame de Doença de Paget', 'valor' => 155.00],
            ['nome' => 'Exame de Doença de Wilson', 'valor' => 160.00],
            ['nome' => 'Exame de Hemocromatose', 'valor' => 165.00],
            ['nome' => 'Exame de Síndrome de Turner', 'valor' => 170.00],
            ['nome' => 'Exame de Síndrome de Klinefelter', 'valor' => 175.00],
            ['nome' => 'Exame de Síndrome de Prader-Willi', 'valor' => 180.00],
            ['nome' => 'Exame de Síndrome de Angelman', 'valor' => 185.00],
            ['nome' => 'Exame de Síndrome de Rett', 'valor' => 190.00],
            ['nome' => 'Exame de Síndrome de Down', 'valor' => 195.00],
            ['nome' => 'Exame de Síndrome de Edwards', 'valor' => 200.00],
            ['nome' => 'Exame de Síndrome de Patau', 'valor' => 70.00],
            ['nome' => 'Exame de Síndrome de DiGeorge', 'valor' => 80.00],
            ['nome' => 'Exame de Síndrome de Turner', 'valor' => 85.00],
            ['nome' => 'Exame de Síndrome de Klinefelter', 'valor' => 90.00],
            ['nome' => 'Exame de Síndrome de Williams', 'valor' => 95.00],
            ['nome' => 'Exame de Síndrome de Angelman', 'valor' => 100.00],
            ['nome' => 'Exame de Síndrome de Prader-Willi', 'valor' => 105.00],
            ['nome' => 'Exame de Síndrome de Rett', 'valor' => 110.00],
            ['nome' => 'Exame de Síndrome de Patau', 'valor' => 115.00],
            ['nome' => 'Exame de Síndrome de Edwards', 'valor' => 120.00],
            ['nome' => 'Exame de Síndrome de Down', 'valor' => 125.00],
            ['nome' => 'Exame de Síndrome de Klinefelter', 'valor' => 130.00],
            ['nome' => 'Exame de Síndrome de Turner', 'valor' => 135.00],
            ['nome' => 'Exame de Síndrome de DiGeorge', 'valor' => 140.00],
            ['nome' => 'Exame de Síndrome de Williams', 'valor' => 145.00],
            ['nome' => 'Exame de Síndrome de Angelman', 'valor' => 150.00],
            ['nome' => 'Exame de Síndrome de Prader-Willi', 'valor' => 155.00],
            ['nome' => 'Exame de Síndrome de Rett', 'valor' => 160.00],
            ['nome' => 'Exame de Síndrome de Patau', 'valor' => 165.00],
            ['nome' => 'Exame de Síndrome de Edwards', 'valor' => 170.00],
            ['nome' => 'Exame de Síndrome de Down', 'valor' => 175.00],
            ['nome' => 'Exame de Síndrome de Klinefelter', 'valor' => 180.00],
            ['nome' => 'Exame de Síndrome de Turner', 'valor' => 185.00],
            ['nome' => 'Exame de Síndrome de DiGeorge', 'valor' => 190.00],
            ['nome' => 'Exame de Síndrome de Williams', 'valor' => 195.00],
            ['nome' => 'Exame de Síndrome de Angelman', 'valor' => 200.00],
            ['nome' => 'Exame de Síndrome de Prader-Willi', 'valor' => 70.00],
            ['nome' => 'Exame de Síndrome de Rett', 'valor' => 80.00],
            ['nome' => 'Exame de Síndrome de Patau', 'valor' => 85.00],
            ['nome' => 'Exame de Síndrome de Edwards', 'valor' => 90.00],
            ['nome' => 'Exame de Síndrome de Down', 'valor' => 95.00],
            ['nome' => 'Exame de Síndrome de Klinefelter', 'valor' => 100.00],
            ['nome' => 'Exame de Síndrome de Turner', 'valor' => 105.00],
            ['nome' => 'Exame de Síndrome de DiGeorge', 'valor' => 110.00],
            ['nome' => 'Exame de Síndrome de Williams', 'valor' => 115.00],
            ['nome' => 'Exame de Síndrome de Angelman', 'valor' => 120.00],
            ['nome' => 'Exame de Síndrome de Prader-Willi', 'valor' => 125.00],
            ['nome' => 'Exame de Síndrome de Rett', 'valor' => 130.00],
            ['nome' => 'Exame de Síndrome de Patau', 'valor' => 135.00],
            ['nome' => 'Exame de Síndrome de Edwards', 'valor' => 140.00],
            ['nome' => 'Exame de Síndrome de Down', 'valor' => 145.00],
            ['nome' => 'Exame de Síndrome de Klinefelter', 'valor' => 150.00],
            ['nome' => 'Exame de Síndrome de Turner', 'valor' => 155.00],
            ['nome' => 'Exame de Síndrome de DiGeorge', 'valor' => 160.00],
            ['nome' => 'Exame de Síndrome de Williams', 'valor' => 165.00],
            ['nome' => 'Exame de Síndrome de Angelman', 'valor' => 170.00],
            ['nome' => 'Exame de Síndrome de Prader-Willi', 'valor' => 175.00],
            ['nome' => 'Exame de Síndrome de Rett', 'valor' => 180.00],
            ['nome' => 'Exame de Síndrome de Patau', 'valor' => 185.00],
            ['nome' => 'Exame de Síndrome de Edwards', 'valor' => 190.00],
            ['nome' => 'Exame de Síndrome de Down', 'valor' => 195.00],
            ['nome' => 'Exame de Síndrome de Klinefelter', 'valor' => 200.00]
        ];
        
        foreach($exames as $exame) {
            Exame::create([
                'tipo_exame' => $exame['nome'],
                'valor_exame' => $exame['valor']
            ]);
        }
    }
}
