<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'cliente_id', 
        'car_id', 
        'date_start', 
        'date_end'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function car()
    {
        return $this->belongsTo(Car::class);
    }
}
