<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Reserva';
    protected $primaryKey = 'id_reserva';
    protected $fillable = [
        'data_inicio',
        'data_previsao',
        'nota_fiscal_pag',
        'id_multa',
        'placa_veiculo',
        'id_cliente'
    ];
}
