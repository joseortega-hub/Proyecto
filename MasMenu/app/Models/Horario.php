<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $fillable = [
        'lunes-abierto', 'lunes-turnos', 'lunes-abrir1', 'lunes-cerrar1', 'lunes-abrir2', 'lunes-cerrar2',
        'martes-abierto', 'martes-turnos', 'martes-abrir1', 'martes-cerrar1', 'martes-abrir2', 'martes-cerrar2',
        'miercoles-abierto', 'miercoles-turnos', 'miercoles-abrir1', 'miercoles-cerrar1', 'miercoles-abrir2', 'miercoles-cerrar2',
        'jueves-abierto', 'jueves-turnos', 'jueves-abrir1', 'jueves-cerrar1', 'jueves-abrir2', 'jueves-cerrar2',
        'viernes-abierto', 'viernes-turnos', 'viernes-abrir1', 'viernes-cerrar1', 'viernes-abrir2', 'viernes-cerrar2',
        'sabado-abierto', 'sabado-turnos', 'sabado-abrir1', 'sabado-cerrar1', 'sabado-abrir2', 'sabado-cerrar2',
        'domingo-abierto', 'domingo-turnos', 'domingo-abrir1', 'domingo-cerrar1', 'domingo-abrir2', 'domingo-cerrar2'
    ];

    public function restaurante()
    {
        return $this->belongsTo('App/Models/Restaurante');
    }
}
