<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'plate',
        'mark',
        'model',
        'color',
        'price',
        'description',
        'release_date',
        "locador_id"
    ];

    public function locador(){
        return $this->belongsTo(Locador::class);
    }

    public function alugueis()
    {
        return $this->hasMany(Aluguel::class);
    }

    public function aluguelAtivo()
    {
        return $this->hasOne(Aluguel::class)->whereNull('date_end');
    }
    
    use HasFactory;
}
