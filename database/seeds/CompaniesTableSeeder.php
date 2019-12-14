<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
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
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 2, 
                        'company' => '343 Industries',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 3, 
                        'company' => 'Splash Damage',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 4, 
                        'company' => 'Ruffian Games',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 5, 
                        'company' => 'Bungie',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 6, 
                        'company' => 'CAPCOM Co., Ltd.',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 7, 
                        'company' => 'SEGA',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 8, 
                        'company' => 'CREATIVE ASSEMBLY',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 9, 
                        'company' => 'PUBG Corporation',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 10, 
                        'company' => 'CD PROJEKT RED',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 11, 
                        'company' => 'Respawn Entertainment',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 12, 
                        'company' => 'Electronic Arts',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 13, 
                        'company' => 'Ubisoft',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 14, 
                        'company' => 'Xbox Game Studios',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 15, 
                        'company' => 'Moon Studios GmbH',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 16, 
                        'company' => 'Firaxis Games',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 17, 
                        'company' => '2K',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 18, 
                        'company' => 'Machine Games',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 19, 
                        'company' => 'Valve',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 20, 
                        'company' => 'Hidden Path Entertainment',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 21, 
                        'company' => 'id Software',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 22, 
                        'company' => 'Bethesda Softworks',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 23, 
                        'company' => 'Activision',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 24, 
                        'company' => 'Sledgehammer Games',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 25, 
                        'company' => 'Raven Software',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 26, 
                        'company' => 'Treyarch',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 27, 
                        'company' => 'Infinity Ward',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 28, 
                        'company' => 'Bethesda Game Studios',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 29, 
                        'company' => 'Obsidian Entertainment',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 30, 
                        'company' => 'Codemasters',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 31, 
                        'company' => 'Triumph Studios',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 31, 
                        'company' => 'Virtual Programming',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 32, 
                        'company' => 'FromSoftware',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 33, 
                        'company' => 'Warner Bros Interactive Entertainment',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 34, 
                        'company' => 'NetherRealm Studios',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 35, 
                        'company' => 'QLOC',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 36, 
                        'company' => 'Shiver',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 37, 
                        'company' => '4A Games',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 38, 
                        'company' => 'Deep Silver',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 39, 
                        'company' => 'GSC Game World',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 40, 
                        'company' => 'Square Enix',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 41, 
                        'company' => 'Ubisoft Montreal',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 42, 
                        'company' => 'Nintendo Entertainment Analysis & Development',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 43, 
                        'company' => 'Nintendo',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ], 
                    
                    [
                        'id' => 44, 
                        'company' => 'Spike Chunsoft Co., Ltd.',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 45, 
                        'company' => 'BANDAI NAMCO Entertainment',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 46, 
                        'company' => 'BANDAI NAMCO Studios',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 47, 
                        'company' => 'KOEI TECMO GAMES CO., LTD.',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 48, 
                        'company' => 'Microsoft Studios',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 49, 
                        'company' => 'Limbic Entertainment',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 50, 
                        'company' => 'Kalypso Media',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 51, 
                        'company' => 'THQ',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 52, 
                        'company' => 'THQ Nordic',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 53, 
                        'company' => 'Yager Development',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      


                    [
                        'id' => 54, 
                        'company' => 'SIE Santa Monica Studio',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],    

                    [
                        'id' => 55, 
                        'company' => 'Sony Interactive Entertainment',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 56, 
                        'company' => 'Campo Santo',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 58, 
                        'company' => 'Tripwire Interactive',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 59, 
                        'company' => 'Antimatter Games',
                        'description' => NULL,
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],               
        ];

        DB::table('companies')->insert($companies);
    }
}
