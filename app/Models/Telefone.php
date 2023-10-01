<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Telefone';
    protected $primaryKey = 'numero';
    protected $fillable = [
        'numero',
        'id_cliente'
    ];

}
