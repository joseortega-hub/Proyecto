<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'direccion', 'ciudad', 'pais', 'region', 'telefono', 'gmail'];


    //Relacion uno a muchos(inversa)
    public function user()
    {
        return $this->belongsTo('App/Models/User');
    }

    //Relacion uno a muchos restaurante
    public function menus()
    {
        return $this->hasMany('App/Models/Menu');
    }
    //Relacion uno a muchos restaurante
    public function imagenes()
    {
        return $this->hasMany('App/Models/Imagen');
    }
    //Relacion uno a uno
    public function horario()
    {
        $horario = Horario::where('restaurante_id', $this->id)->first();
    }
}
