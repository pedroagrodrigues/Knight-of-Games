<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * Get the websites that contains the products.
     */
    public function getProductsFromCompany()
    {
        return $this->belongsToMany(Product::class);
    }
}
