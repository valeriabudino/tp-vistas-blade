<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Simulamos una consulta a la base de datos de forma simple
    public static function allLocal()
    {
    return [
        [
        'nombre' => 'Yerba mate',
        'precio' => 2500,
        'stock' => 15,
        ],
        [
        'nombre' => 'Te verde',
        'precio' => 1800,
        'stock' => 8,
        ],
        [
        'nombre' => 'Miel pura',
        'precio' => 3200,
        'stock' => 0,
        ],
    ];
    }
}

