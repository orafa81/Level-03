<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Locador extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'store_name',
        'city',
        'cep',
        'road',
        'neighborhood',
        'state',
        'number',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function car()
    {
        return $this->hasMany(Car::class);
    }
}
