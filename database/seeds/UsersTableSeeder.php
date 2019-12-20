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
                        'role_id' => 1,
                        'name' => 'potas', 
                        'email' => 'potas@gmail',
                        'password' => Hash::make('12345678'),
                        'created_at' => $date,
                        'updated_at' => $date

                    ],

                    [   'id' => 2, 
                        'role_id' => 3,
                        'name' => 'Josué Ferreira', 
                        'email' => 'joshuaferreira@gmail.com', 
                        'password' => Hash::make('12345678'),
                        'created_at' => $date,
                        'updated_at' => $date
                    ],
                    
                    [   'id' => 3, 
                        'role_id' => 3,
                        'name' => 'Pedro "Trovao" Rodrigues',
                        'email' => 'pedrorodriguez@gmail.com', 
                        'password' => Hash::make('12345678'),
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [   'id' => 4, 
                        'role_id' => 2,
                        'name' => 'John Smith',  
                        'email' => 'whoisjohnsmith@gmail.com', 
                        'password' => Hash::make('12345678'),
                        'created_at' => $date,
                        'updated_at' => $date
                    ],
                    
                    [   'id' => 5, 
                        'role_id' => 2,
                        'name' => 'Enola Gay',
                        'email' => 'riphiroshima@gmail.com', 
                        'password' => Hash::make('12345678'),
                        'created_at' => $date,
                        'updated_at' => $date
                    ],
        ];

        //DB::table('roles')->insert($roles);
        DB::table('users')->insert($users);
    }
}
