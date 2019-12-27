<?php

namespace App;

use App\Product;
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
