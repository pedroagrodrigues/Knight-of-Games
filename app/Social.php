<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'social_id',
    ];

    /**
     * Get the Social Media that belongs to users.
     */
    public function getUsersFromSocial()
    {
        return $this->belongsToMany(Users::class);
    }
}
