<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Categoria;

class Post extends Model
{
    use HasFactory;

    /*Relación 1 a muchos inverso */
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function categorias()
    {
        return $this->belongsTo(Categoria::class);
    }
}
