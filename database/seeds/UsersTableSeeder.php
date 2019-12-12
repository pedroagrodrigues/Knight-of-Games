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

        $roles = [
                    [
                        'id' => 1, 
                        'role' => 'common', 
                    ],

                    [
                        'id' => 2, 
                        'role' => 'moderator', 
                    ],

                    [
                        'id' => 3, 
                        'role' => 'administrator', 
                    ]
        ];

        $users = [
                    [   'id' => 1, 
                        'role_id' => 3,
                        'name' => 'Josué Ferreira', 
                        'username' => 'patriotHunter', 
                        'email' => 'joshuaferreira@gmail.com', 
                        'password' => '12345678'
                    ],
                    
                    [   'id' => 2, 
                        'role_id' => 3,
                        'name' => 'Pedro Rodrigues',
                        'username' => 'Trovao', 
                        'email' => 'pedrorodriguez@gmail.com', 
                        'password' => '12345678'
                    ],

                    [   'id' => 3, 
                        'role_id' => 2,
                        'name' => 'John Smith', 
                        'username' => 'WhoIsJohnSmith', 
                        'email' => 'whoisjohnsmith@gmail.com', 
                        'password' => '12345678'
                    ],
                    
                    [   'id' => 2, 
                        'role_id' => 3,
                        'name' => 'Enola Gay',
                        'username' => 'LittleBoy', 
                        'email' => 'riphiroshima@gmail.com', 
                        'password' => '12345678'
                    ],
        ];

        DB::table('users');
    }
}
