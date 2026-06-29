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
        'nombre' => 'Alimento Balanceado Perro 15kg',
        'precio' => 8500,
        'stock' => 20,
        ],
        [
        'nombre' => 'Alimento Balanceado Gato 7kg',
        'precio' => 6200,
        'stock' => 15,
        ],
        [
        'nombre' => 'Collar Antipulgas Perro',
        'precio' => 4500,
        'stock' => 30,
        ],
        [
        'nombre' => 'Shampoo para Mascotas 500ml',
        'precio' => 2800,
        'stock' => 12,
        ],
        [
        'nombre' => 'Cama Ortopédica para Perros',
        'precio' => 12500,
        'stock' => 5,
        ],
        [
        'nombre' => 'Juguete Mordedor Resistente',
        'precio' => 1800,
        'stock' => 0,
        ],
        [
        'nombre' => 'Arena Sanitaria Gato 10kg',
        'precio' => 3200,
        'stock' => 25,
        ],
        [
        'nombre' => 'Comedero Automático',
        'precio' => 9500,
        'stock' => 8,
        ],
    ];
    }
}

