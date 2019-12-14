<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    /**
     * Get the companies that developed and published the products.
     */
    public function getCompaniesFromProduct()
    {
        return $this->belongToMany(Company::class);
    }

    /**
     * Get the comments to the product.
     */
    public function getCommentsFromProduct()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the websites that contain the product.
     */
    public function getWebsitesFromProduct()
    {
        return $this->belongsToMany(Website::class);
    }

    /**
     * Get the genres that belongs to the product.
     */
    public function getGenresFromProduct()
    {
        return $this->belongsToMany(Genre::class);
    }
}
