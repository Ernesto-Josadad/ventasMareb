<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';

    protected $primaryKey='id';

    public $incrementing=false;

    public $timestamps=true;

    protected $fillable=[
        'id',
        'nombre',
        'precio_venta',
        'cantidad',
    ];

}
