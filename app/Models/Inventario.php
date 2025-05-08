<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla
    protected $table = 'inventario';

    // Campos que se pueden llenar masivamente
    protected $fillable = [
        'name_product',
        'existencias',
        'precio',
    ];


    public $timestamps = false;
}
