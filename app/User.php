<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

        /**
     * Get the role that belongs to the users.
     */
    public function getRoleFromUser()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Get the comments that belongs to the user.
     */
    public function getCommentsFromUser()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Get the social media that belongs to the users.
     */
    public function getSocialsFromUser()
    {
        return $this->belongsToMany(Social::class);
    }
}
