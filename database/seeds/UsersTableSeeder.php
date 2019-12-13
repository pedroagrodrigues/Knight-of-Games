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
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 2, 
                        'role' => 'moderator',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 3, 
                        'role' => 'administrator',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],
        ];

        $users = [
                    [   'id' => 1, 
                        'role_id' => 3,
                        'name' => 'Josué Ferreira', 
                        'email' => 'joshuaferreira@gmail.com', 
                        'password' => '12345678',
                        'created_at' => $date,
                        'updated_at' => $date
                    ],
                    
                    [   'id' => 2, 
                        'role_id' => 3,
                        'name' => 'Pedro "Trovao" Rodrigues',
                        'email' => 'pedrorodriguez@gmail.com', 
                        'password' => '12345678',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [   'id' => 3, 
                        'role_id' => 2,
                        'name' => 'John Smith',  
                        'email' => 'whoisjohnsmith@gmail.com', 
                        'password' => '12345678',
                        'created_at' => $date,
                        'updated_at' => $date
                    ],
                    
                    [   'id' => 4, 
                        'role_id' => 3,
                        'name' => 'Enola Gay',
                        'email' => 'riphiroshima@gmail.com', 
                        'password' => '12345678',
                        'created_at' => $date,
                        'updated_at' => $date
                    ],
        ];

        DB::table('roles')->insert($roles);
        DB::table('users')->insert($users);
    }
}
