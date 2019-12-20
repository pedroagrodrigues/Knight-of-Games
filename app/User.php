<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id'
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
     * Add a mutator to ensure hashed passwords
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
    }

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
        return $this->belongToMany(Social::class);
    }


}
