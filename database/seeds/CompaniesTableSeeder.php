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
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 2, 
                        'company' => '343 Industries',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 3, 
                        'company' => 'Splash Damage',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 4, 
                        'company' => 'Ruffian Games',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 5, 
                        'company' => 'Bungie',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 6, 
                        'company' => 'CAPCOM Co., Ltd.',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 7, 
                        'company' => 'SEGA',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 8, 
                        'company' => 'CREATIVE ASSEMBLY',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 9, 
                        'company' => 'PUBG Corporation',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 10, 
                        'company' => 'CD PROJEKT RED',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 11, 
                        'company' => 'Respawn Entertainment',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 12, 
                        'company' => 'Electronic Arts',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 13, 
                        'company' => 'Ubisoft',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 14, 
                        'company' => 'Xbox Game Studios',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 15, 
                        'company' => 'Moon Studios GmbH',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 16, 
                        'company' => 'Firaxis Games',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 17, 
                        'company' => '2K',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 18, 
                        'company' => 'Machine Games',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 19, 
                        'company' => 'Valve',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 20, 
                        'company' => 'Hidden Path Entertainment',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 21, 
                        'company' => 'id Software',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 22, 
                        'company' => 'Bethesda Softworks',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 23, 
                        'company' => 'Activision',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 24, 
                        'company' => 'Sledgehammer Games',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 25, 
                        'company' => 'Raven Software',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 26, 
                        'company' => 'Treyarch',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 27, 
                        'company' => 'Infinity Ward',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 28, 
                        'company' => 'Bethesda Game Studios',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 29, 
                        'company' => 'Obsidian Entertainment',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 30, 
                        'company' => 'Codemasters',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 31, 
                        'company' => 'Triumph Studios',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 32, 
                        'company' => 'Virtual Programming',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 33, 
                        'company' => 'FromSoftware',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 34, 
                        'company' => 'Warner Bros Interactive Entertainment',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 35, 
                        'company' => 'NetherRealm Studios',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 36, 
                        'company' => 'QLOC',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],


                    [
                        'id' => 37, 
                        'company' => 'Shiver',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 38, 
                        'company' => '4A Games',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 39, 
                        'company' => 'Deep Silver',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 40, 
                        'company' => 'GSC Game World',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 41, 
                        'company' => 'Square Enix',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 42, 
                        'company' => 'Ubisoft Montreal',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 43, 
                        'company' => 'Nintendo Entertainment Analysis & Development',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 44, 
                        'company' => 'Nintendo',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ], 
                    
                    [
                        'id' => 45, 
                        'company' => 'Spike Chunsoft Co., Ltd.',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 46, 
                        'company' => 'BANDAI NAMCO Entertainment',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 47, 
                        'company' => 'BANDAI NAMCO Studios',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 48, 
                        'company' => 'KOEI TECMO GAMES CO., LTD.',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 49, 
                        'company' => 'Microsoft Studios',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 50, 
                        'company' => 'Limbic Entertainment',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 51, 
                        'company' => 'Kalypso Media',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 52, 
                        'company' => 'THQ',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 53, 
                        'company' => 'THQ Nordic',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      

                    [
                        'id' => 54, 
                        'company' => 'Yager Development',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],      


                    [
                        'id' => 55, 
                        'company' => 'SIE Santa Monica Studio',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],    

                    [
                        'id' => 56, 
                        'company' => 'Sony Interactive Entertainment',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 57, 
                        'company' => 'Campo Santo',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 58, 
                        'company' => 'Tripwire Interactive',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 59, 
                        'company' => 'Antimatter Games',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],               

                    [
                        'id' => 60,
                        'company_id' => 'Blizzard Entertainment',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 61,
                        'company' => 'Psyonix',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 62,
                        'company' => 'Konami',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 63,
                        'company' => 'Kunos Simulazioni',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 64,
                        'company' => '505 Games',
                        'description' => "Something",
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date
                    ]


        ];

        DB::table('companies')->insert($companies);
    }
}
