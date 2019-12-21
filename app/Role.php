<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * Get the users for the roles.
     */
    public function getUsersFromRole()
    {
        return $this->hasMany(User::class); //Eloquent will assume the foreign key of User is role_id
    }

    public function findAllUsers()
    {
        $users = App\User::find(1)->users()->where('name', 'e-mail', 'password');
    }

    public function findAdmins()
    {
        // $admins =
    }

    public function findModerators()
    {
        // $moderators =
    }

    public function findCommons()
    {
        // $commons =
    }
}
