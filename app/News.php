<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $fillable = ['title', 'author', 'body', 'category', 'hashtag'];

    /**
     * Get the products that belongs to genres.
     */
    public function getCommentsFromNews()
    {
        return $this->hasMany(Comment::class);
    }
}
