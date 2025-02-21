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
        "user_id"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    
    use HasFactory;
}
