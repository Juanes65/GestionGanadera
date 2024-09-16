<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\procedure;
use App\Models\record;

class animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'edad',
        'marcacion',
    ];
    
    public function procedures(){
        return $this->belongsToMany(procedure::class);
    }

    public function records(){
        return $this->belongsToMany(record::class);
    }
}
