<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * Get the products that belongs to genres.
     */
    public function getCommentsFromNews()
    {
        return $this->hasMany(Comment::class);
    }
}
