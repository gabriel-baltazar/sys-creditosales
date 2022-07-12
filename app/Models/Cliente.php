<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    public $timestamps = true;
    protected $fillable = ['nome', 'cpf', 'data_nasc', 'endereco', 'numero', 'bairro', 'cep', 'cidade', 'uf', 'telefone', 'email'];
}
