<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\inventory;
use App\Models\animal;

class procedure extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombreProcedimiento',
        'id_inventario',
        'id_animal',
    ];

    public function inventories(){
        return $this->belongsToMany(inventory::class);
    }

    public function animals(){
        return $this->belongsToMany(animal::class);
    }
}
