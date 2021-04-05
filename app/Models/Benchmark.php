<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Benchmark extends Model
{
    use HasFactory;

    protected $table = 'benchmarks';

    protected $fillable = [
        'user_id',
        'score',
        'image',
        'nomination_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nomination()
    {
        return $this->belongsTo(Nomination::class);
    }

    public function getImageAttribute()
    {
        return URL::to('/') . '/storage/' . $this->attributes['image'];
    }
}
