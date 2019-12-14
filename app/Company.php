<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * Get the websites that contains the products.
     */
    public function getProductFromCompany()
    {
        return $this->belongsTo(Product::class);
    }
}
