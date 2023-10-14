<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Rennokki\QueryCache\Traits\QueryCacheable;

class Post extends Model
{
    use HasFactory, QueryCacheable;

    public $cacheFor = 3600; // One Hour's Cache

    protected $fillable = [
        'name',
        'author_id',
        'category_id',
    ];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
