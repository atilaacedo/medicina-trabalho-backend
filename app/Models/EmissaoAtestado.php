<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmissaoAtestado extends Model
{
    use HasFactory;

    protected $table = 'emissao_atestado';

    public $timestamps = false;

    protected $fillable = [
        'id_consulta',
        'descricao'
    ];

    public function consulta() : BelongsTo 
    {
        return $this->belongsTo(Consulta::class, 'id_consulta');
    }
}
