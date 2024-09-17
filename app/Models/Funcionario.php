<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Funcionario extends Model
{
    use HasFactory;

    protected $table = "funcionario";

    public $timestamps = false;

    protected $fillable = [
        "nome",
        "cpf",
        "telefone",
        "ocupacao",
        "id_empresa"
    ];

    public function empresa() : BelongsTo
    {
        return $this->belongsTo(Empresa::class, "id_empresa");
    }
}
