<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'cpf',
        'city',
        'cep',
        'road',
        'neighborhood',
        'state',
        'number',
        'date_of_birth',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
}
