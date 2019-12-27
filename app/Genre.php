<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    /**
     * Get the products that belongs to genres.
     */
    public function getProductsFromGenre()
    {
        return $this->belongsToMany(Product::class);
    }
}
