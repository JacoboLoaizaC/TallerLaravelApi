<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $table = 'cars'; // Nombre de la tabla
    protected $primaryKey = 'id_car'; // Clave primaria

    protected $fillable = [
        'car_make',
        'car_model',
        'car_year',
        'car_price',
        'car_status',
    ];
}