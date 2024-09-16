<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\procedure;

class inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombreMedicamento',
        'cantidad',
        'fechaVencimiento',
        'categoria',
    ];

    public function procedures(){
        return $this->belongsToMany(procedure::class);
    }
}
