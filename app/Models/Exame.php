<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exame extends Model
{
    use HasFactory;

    protected $table = 'exame';

    public $timestamps = false;

    protected $fillable = [
        'tipo_exame',
        'valor_exame'
    ];
}
