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
                        'genre' => 'Fighting',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 4, 
                        'genre' => 'Stealth',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 5, 
                        'genre' => 'Survival',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 6, 
                        'genre' => 'Battle Royale',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 7, 
                        'genre' => 'Rhythm',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 8, 
                        'genre' => 'Survival horror',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 9, 
                        'genre' => 'Visual novel',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 10, 
                        'genre' => 'RPG',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 11, 
                        'genre' => 'MMORPG',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 12, 
                        'genre' => 'Tactical RPG',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 13, 
                        'genre' => 'Simulation',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 14, 
                        'genre' => 'Strategy',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 15, 
                        'genre' => 'Racing',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 16, 
                        'genre' => 'Sports',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 17, 
                        'genre' => 'Indie',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 18, 
                        'genre' => 'Casual',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 19, 
                        'genre' => 'Adventure',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 20, 
                        'genre' => 'Realistic',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 21, 
                        'genre' => 'Violence',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 22, 
                        'genre' => 'Retro',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 23, 
                        'genre' => 'Arcade',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 24, 
                        'genre' => 'Classic',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 25, 
                        'genre' => 'Space',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 26, 
                        'genre' => 'Hack & Slash',
                        'created_at' => $date,
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 27,
                        'genre' => 'Third Person',
                        'created_at' => $date,
                        'updated_at' => $date
                    ],

                    [
                        'id' => 28,
                        'genre' => 'First Person',
                        'created_at' => $date,
                        'updated_at' => $date
                    ],

                    [
                        'id' => 29,
                        'genre' => 'Open World',
                        'created_at' => $date,
                        'updated_at' => $date
                    ],

                    [
                        'id' => 30,
                        'genre' => 'Fantasy',
                        'created_at' => $date,
                        'updated_at' => $date
                    ],

                    [
                        'id' => 31,
                        'genre' => 'Action',
                        'created_at' => $date,
                        'updated_at' => $date
                    ],

                    [
                        'id' => 32,
                        'genre' => 'Aviation',
                        'created_at' => $date,
                        'updated_at' => $date
                    ]

        ];

        
        foreach ($genres as $genre)
        {
            DB::table('genres')->insert($genre);
        }
        
    }
}
