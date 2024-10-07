<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resolucione extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre_archivo',
        'descripcion',
        'url'
    ];
}
