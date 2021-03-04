<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'author_id',
        'image'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function getImageAttribute()
    {
        return URL::to('/').'/storage/'.$this->attributes['image'];
    }
}
