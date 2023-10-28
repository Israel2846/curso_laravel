<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // protected $table = "users";

    /* Se usa para inserts de columnas masivas donde pasan dinamicamente al controlador (Se asignan aquí los campos que se guardaran) */
    // protected $fillable = ['name', 'descripcion', 'categoria'];

    /* Segunda manera de insertar columnas masivas (Se asignan aquí los campos que se ignorarán) */
    protected $guarded = [];
}
