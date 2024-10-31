<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paciente;

class Paciente extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'data_nascimento',
        'endereco',
        'telefone',
        'email'
    ];
}
