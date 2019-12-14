<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Get the website that have been comment or mentioned.
     */
    public function getWebsiteFromComment()
    {
        return $this->belongsTo(Website::class);
    }

    /**
     * Get the user that created the comment to a product/news/website.
     */
    public function getUserFromComment()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the product that have been commented.
     */
    public function getProductFromComment()
    {
        return $this->belongsTo(Product::class);
    }

    /**
     * Get the news from a specific comment.
     */
    public function getNewsFromComment()
    {
        return $this->belongsTo(Product::class);
    }
}
