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
        'release_date',
    ];

    use HasFactory;
}
