<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    use HasFactory;
    protected $table = 'imagenes';
    protected $fillable = ['urlImg'];

    //Relacion uno a muchos(inversa)
    public function user()
    {
        return $this->belongsTo('App/Models/Restaurante');
    }
}
