<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $fillable = ['website','rating'];
    /**
     * Get the websites that contains the products.
     */
    public function getProductsFromWebsite()
    {
        return $this->belongsToMany(Product::class, 'product_has_website', 'website_id', 'product_id');
    }

    /**
     * Get the websites that contains the products.
     */
    public function getCommentsWebsite()
    {
        return $this->belongsTo(Website::class);
    }
}
