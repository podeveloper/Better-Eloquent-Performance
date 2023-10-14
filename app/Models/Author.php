<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Author extends Model
{
    use HasFactory, QueryCacheable;

    public $cacheFor = 3600; // One Hour's Cache

    protected $fillable = ['name'];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
