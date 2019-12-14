<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    /**
     * Get the Social Media that belongs to users.
     */
    public function getUsersFromSocial()
    {
        return $this->belongsToMany(Users::class);
    }
}
