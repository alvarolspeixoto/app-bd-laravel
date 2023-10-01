<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Cliente';
    protected $primaryKey = 'id_cliente';
    protected $fillable = [
        'email',
        'senha',
        'nome_pessoa',
        'nome_empresa',
        'cpf',
        'cnpj',
        'tipo',
        'nota_fiscal_pag'
    ];

}
