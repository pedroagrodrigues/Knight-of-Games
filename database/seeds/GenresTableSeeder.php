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
        $genres = [
                    [
                        'id' => 1, 
                        'genre' => 'Platform',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 2, 
                        'genre' => 'Shooter',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 3, 
                        'genre' => 'Platform',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],
        ];

        

        DB::table('genres')->insert($genres);
    }
}
