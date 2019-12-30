<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['genre'];
    /**
     * Get the products that belongs to genres.
     */
    public function getProductsFromGenre()
    {
        return $this->belongsToMany(Product::class, 'product_has_genres', 'genre_id', 'product_id');
    }
}
