<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Consulta extends Model
{
    use HasFactory;

    protected $table= 'consulta';

    public $timestamps = false;

    protected $fillable = [
        'id_funcionario',
        'id_medico',
        'data_consulta',
        'id_exame'
    ];

    public function funcionario() : BelongsTo
    {
        return $this->belongsTo(Funcionario::class, 'id_funcionario');
    }

    public function medico() : BelongsTo
    {
        return $this->belongsTo(Medico::class, 'id_medico');
    }

    public function exame() : BelongsTo
    {
        return $this->belongsTo(Exame::class, 'id_exame');
    }

}
