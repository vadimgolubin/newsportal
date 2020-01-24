<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'picture', 'heading', 'post'
    ];
    public function comments()
    {
        return $this->hasMany(Comment::class, 'news_id');
    }
}
