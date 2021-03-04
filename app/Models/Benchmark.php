<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Benchmark extends Model
{
    use HasFactory;

    protected $fillable = [
        'place',
        'image',
        'user_id',
        'nomination_id',
    ];
}
