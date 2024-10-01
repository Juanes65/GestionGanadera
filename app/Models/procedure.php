<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class procedure extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreProcedimiento',
        'descripcion',
        'cantidad',
        'id_inventario',
        'id_animal',
        'id_usuario'
    ];

    public function inventory()
    {
        return $this->belongsTo(inventory::class, 'id_inventario');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }

    public function animal()
    {
        return $this->belongsTo(animal::class, 'id_animal');
    }
}

