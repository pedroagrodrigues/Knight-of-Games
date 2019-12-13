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
        $companies = [
                    [
                        'id' => 1, 
                        'company' => 'Rockstar Games',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 2, 
                        'company' => '343 Industries',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 3, 
                        'company' => 'Splash Damage',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 4, 
                        'company' => 'Ruffian Games',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 5, 
                        'company' => 'Bungie',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 6, 
                        'company' => 'CAPCOM Co., Ltd.',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 7, 
                        'company' => 'SEGA',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 8, 
                        'company' => 'CREATIVE ASSEMBLY',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 9, 
                        'company' => 'PUBG Corporation',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 10, 
                        'company' => 'CD PROJEKT RED',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 11, 
                        'company' => 'Respawn Entertainment',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 12, 
                        'company' => 'Electronic Arts',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 13, 
                        'company' => 'Ubisoft',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 14, 
                        'company' => 'Xbox Game Studios',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 15, 
                        'company' => 'Moon Studios GmbH',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 16, 
                        'company' => 'Firaxis Games',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 17, 
                        'company' => '2K',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 18, 
                        'company' => 'Machine Games',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 19, 
                        'company' => 'Valve',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 20, 
                        'company' => 'Hidden Path Entertainment',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 21, 
                        'company' => 'id Software',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 22, 
                        'company' => 'Bethesda Softworks',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 23, 
                        'company' => 'Activision',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 24, 
                        'company' => 'Sledgehammer Games',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 25, 
                        'company' => 'Raven Software',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 26, 
                        'company' => 'Treyarch',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 27, 
                        'company' => 'Infinity Ward',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 28, 
                        'company' => 'Bethesda Game Studios',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 29, 
                        'company' => 'Obsidian Entertainment',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 30, 
                        'company' => 'Codemasters',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 31, 
                        'company' => 'Triumph Studios',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 31, 
                        'company' => 'Virtual Programming',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 32, 
                        'company' => 'FromSoftware',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 33, 
                        'company' => 'Warner Bros Interactive Entertainment',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 34, 
                        'company' => 'NetherRealm Studios',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 35, 
                        'company' => 'QLOC',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 36, 
                        'company' => 'Shiver',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 37, 
                        'company' => '4A Games',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 38, 
                        'company' => 'Deep Silver',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 39, 
                        'company' => 'GSC Game World',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 40, 
                        'company' => 'Square Enix',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 41, 
                        'company' => 'Ubisoft Montreal',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 42, 
                        'company' => 'Nintendo Entertainment Analysis & Development',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 43, 
                        'company' => 'Nintendo',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ], 
                    
                    [
                        'id' => 44, 
                        'company' => 'Spike Chunsoft Co., Ltd.',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 45, 
                        'company' => 'BANDAI NAMCO Entertainment',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 46, 
                        'company' => 'BANDAI NAMCO Studios',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 47, 
                        'company' => 'KOEI TECMO GAMES CO., LTD.',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 48, 
                        'company' => 'Microsoft Studios',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 49, 
                        'company' => 'Limbic Entertainment',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 50, 
                        'company' => 'Kalypso Media',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 51, 
                        'company' => 'THQ',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 52, 
                        'company' => 'THQ Nordic',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 53, 
                        'company' => 'Yager Development',
                        'created_at' => 1999, //indicate the company's start time
                        'updated_at' => $date 
                    ],      


                    [
                        'id' => 54, 
                        'company' => 'SIE Santa Monica Studio',
                        'created_at' => 1999, //indicate the company's start time
                        'updated_at' => $date 
                    ],    

                    [
                        'id' => 55, 
                        'company' => 'Sony Interactive Entertainment',
                        'created_at' => 1999, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 56, 
                        'company' => 'Campo Santo',
                        'created_at' => 1999, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 58, 
                        'company' => 'Tripwire Interactive',
                        'created_at' => 1999, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 59, 
                        'company' => 'Antimatter Games',
                        'created_at' => 1999, //indicate the company's start time
                        'updated_at' => $date 
                    ],
                   

                    



                    
        ];

        DB::table('companies')->insert($companies);
    }
}
