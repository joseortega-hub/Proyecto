<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'urlArchivos'];


    //Relacion uno a muchos(inversa)
    public function user()
    {
        return $this->belongsTo('App/Models/Restaurante');
    }
}
