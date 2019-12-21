<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    /**
     * Get the websites that contains the products.
     */
    public function getProductsFromWebsite()
    {
        return $this->belongsToMany(Product::class);
    }

    /**
     * Get the websites that contains the products.
     */
    public function getCommentsWebsite()
    {
        return $this->belongsTo(Website::class);
    }
}
