<?php

namespace App;

use App\Company;
use App\Comment;
use App\Website;
use App\Genre;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['product','status', 'description'];
    /**
     * Get the companies that developed and published the products.
     */
    public function getCompaniesFromProduct()
    {
        return $this->belongsToMany(Company::class, 'product_has_companies', 'product_id', 'company_id');
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
        return $this->belongsToMany(Website::class, 'product_has_website', 'product_id', 'website_id');
    }

    /**
     * Get the genres that belongs to the product.
     */
    public function getGenresFromProduct()
    {
        return $this->belongsToMany(Genre::class, 'product_has_genres', 'product_id', 'genre_id');
    }
}
