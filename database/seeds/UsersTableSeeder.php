<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');
        $roles = [
                    [
                        'id' => 1, 
                        'role' => 'common',
                        'description' => "Just a common user",
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 2, 
                        'role' => 'moderator',
                        'description' => "You can restrict the comments and notify abusive users",
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 3, 
                        'role' => 'administrator',
                        'description' => "You were the Chose One!",
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],
        ];

        $users = [
                    [   'id' => 1,
                        'role_id' => 3,
                        'name' => 'Admin', 
                        'email' => 'admin@localhost.com', 
                        'password' => Hash::make('admin@localhost'),
                        'created_at' => $date,
                        'updated_at' => $date
                    ]
        ];

        DB::table('roles')->insert($roles);
        DB::table('users')->insert($users);
    }
}
