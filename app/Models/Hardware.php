<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    use HasFactory;

    protected $table = 'hardwares';

    public $timestamps = false;

    protected $fillable = [
        'CPU',
        'GPU',
        'RAM',
        'PSU',
        'storage',
        'motherboard',
        'approved',
    ];
}
