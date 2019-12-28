<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    //protected $fillable = ['company','description'];
    /**
     * Get the websites that contains the products.
     */
    public function getProductsFromCompany()
    {
        return $this->belongsToMany(Product::class, 'product_has_companies', 'product_id', 'company_id');
    }
}
