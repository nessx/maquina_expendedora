<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre_producto',
        'imagen_producto',
        'pais_procedencia',
        'precio_producto',
        'kcal',
        'informacion_nutricional',
        'password'
    ];

}
