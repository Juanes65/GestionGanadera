<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombreMedicamento',
        'cantidad',
        'fechaVencimiento',
        'categoria',
    ];

    public function procedures()
    {
        return $this->hasMany(procedure::class, 'id_inventario');
    }
}

