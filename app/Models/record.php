<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombreProcedimiento',
        'medicamento',
        'dosis',
        'fechaRealisacion',
        'id_animal',
    ];

    public function animals(){
        return $this->belongsToMany(animal::class);
    }
}
