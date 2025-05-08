<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla (opcional, si no sigue la convención de nombres)
    protected $table = 'clientes';

    // Especifica el nombre de la clave primaria
    protected $primaryKey = 'No_Cliente';

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'name_client',
        'Adress',
        'phone_number',
        'E-mail',
        'last_purchase'
    ];


    public $timestamps = false;
}


