<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table='Mascotas';
    protected $primaryKey='id_mascota';

    public $incrementing=true;
    public $timestamps=true;
    public $fillable=[
      'mascotas_id',
      'nombre',
      'edad',
      'peso',
      'genero'
    ];

}
