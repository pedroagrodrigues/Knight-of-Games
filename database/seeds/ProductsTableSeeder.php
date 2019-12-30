<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');
        $products = [
                        [
                            'id' => 1,
                            'product' => 'Witcher 3 - Wild Hunt',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'19-05-2015',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 2,
                            'product' => 'Red Dead Redemption II',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'26-10-2019',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 3,
                            'product' => 'Halo: The Master Chief Collection',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'03-12-2019',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 4,
                            'product' => 'Grand Theft Auto V',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'17-09-2013',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 5,
                            'product' => 'Bioshock Infinite',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'26-03-2013',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 6,
                            'product' => 'Half-Life: Alyx ',
                            'status' => 'pre order',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'03-2020',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 7,
                            'product' => 'Dirt 3',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'24-05-2011',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 8,
                            'product' => 'Dirt 4',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'06-06-2017',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 9,
                            'product' => 'DOOM',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'13-05-2016',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 10,
                            'product' => 'Call of Duty Modern Warfare',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'25-10-2019',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 11,
                            'product' => 'FIFA 20',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'24-09-2019',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 12,
                            'product' => 'Microsoft Flight Simulator',
                            'status' => 'soon',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'2020',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 13,
                            'product' => 'Forza 4 Horizon',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'28-09-2019',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 14,
                            'product' => 'Rising Storm 2: Vietnam',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'30-05-2017',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 15,
                            'product' => 'Star Wars: Jedi Fallen Order',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'15-11-2019',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 16,
                            'product' => 'Need for Speed Heat',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'08-11-2019',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 17,
                            'product' => 'Boorderlands 3',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'13-09-2019',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 18,
                            'product' => 'Spec Ops: The Line',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'26-06-2012',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 19,
                            'product' => 'Max Payne 3',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'15-05-2012',
                            'updated_at' => $date
                        ],
                        
                        [
                            'id' => 20,
                            'product' => 'Resident Evil 2',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'11-01-2019',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 21,
                            'product' => 'Overwatch',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'24-05-2016',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 22,
                            'product' => 'Assassins Creed Odyssey',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'02-10-2018',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 23,
                            'product' => 'Watch Dogs Legion',
                            'status' => 'pre order',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'06-03-2020',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 24,
                            'product' => 'DOOM Eternal',
                            'status' => 'pre order',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'20-03-2020',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 25,
                            'product' => 'Ace Combat 7: Skies Unknown',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'18-01-2019',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 26,
                            'product' => 'Destroy All Humans!',
                            'status' => 'pre order',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'2020',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 27,
                            'product' => 'Beyond Good and Evil 2',
                            'status' => 'soon',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //NULL,
                            'updated_at' => NULL
                        ],

                        [
                            'id' => 28,
                            'product' => 'Alien Isolation',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'07-10-2014',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 29,
                            'product' => 'God of War',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'20-04-2018',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 30,
                            'product' => 'Gran Turismo Sport',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'17-10-2017',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 31,
                            'product' => 'Firewatch',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'09-02-2016',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 32,
                            'product' => 'Call of Duty Black Ops III',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'06-11-2015',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 33,
                            'product' => 'Call of Duty Black Ops 4',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'03-08-2018',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 34,
                            'product' => 'Killing Floor 2',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'18-11-2016',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 35,
                            'product' => 'Rocket League',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'07-06-2015',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 36,
                            'product' => 'Counter Strike: Global Offensive',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'21-08-2012',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 37,
                            'product' => 'PES 2020',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'30-06-2019',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 38,
                            'product' => 'Battlefield 5',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'09-11-2019',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 39,
                            'product' => 'Battlefield 1',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'21-10-2016',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 40,
                            'product' => 'Minecraft',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'17-05-2009',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 41,
                            'product' => 'F1 2019',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'25-06-2019',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 42,
                            'product' => 'Burnout Paradise',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'22-05-2008',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 43,
                            'product' => 'Project CARS 2',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //'21-09-2019',
                            'updated_at' => $date
                        ],

                        [
                            'id' => 44,
                            'product' => 'Asseto Corsa Competizione',
                            'status' => 'available',
                            'description' => "Something", // NULL,
                            'created_at' => $date, //$date,
                            'updated_at' => $date
                        ],

                    ];

        $product_has_genres = [

                    [
                        'product_id' => 1,
                        'genre_id' => 10,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 1,
                        'genre_id' => 27,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],
                    
                    [
                        'product_id' => 1,
                        'genre_id' => 29,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 1,
                        'genre_id' => 30,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 2,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],
                    [
                        'product_id' => 2,
                        'genre_id' => 19,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 3,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 3,
                        'genre_id' => 19,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 3,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 3,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 4,
                        'genre_id' => 19,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 4,
                        'genre_id' => 27,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 4,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 4,
                        'genre_id' => 29,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 4,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 5,
                        'genre_id' => 19,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 5,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 5,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 5,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 6,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 6,
                        'genre_id' => 19,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 6,
                        'genre_id' => 19,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 6,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 7,
                        'genre_id' => 13,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 7,
                        'genre_id' => 15,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 7,
                        'genre_id' => 16,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 8,
                        'genre_id' => 13,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 8,
                        'genre_id' => 15,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 8,
                        'genre_id' => 16,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 9,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 9,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 9,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 9,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 10,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 10,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 10,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 10,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 11,
                        'genre_id' => 16,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 12,
                        'genre_id' => 13,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 12,
                        'genre_id' => 20,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 12,
                        'genre_id' => 29,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 13,
                        'genre_id' => 15,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 13,
                        'genre_id' => 20,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 13,
                        'genre_id' => 29,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 14,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 14,
                        'genre_id' => 13,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 14,
                        'genre_id' => 20,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 14,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 14,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],


                    [
                        'product_id' => 15,
                        'genre_id' => 19,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 15,
                        'genre_id' => 26,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 15,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 16,
                        'genre_id' => 15,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 16,
                        'genre_id' => 23,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 16,
                        'genre_id' => 29,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 17,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 17,
                        'genre_id' => 10,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 17,
                        'genre_id' => 23,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 17,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 17,
                        'genre_id' => 29,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 17,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 18,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 18,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 18,
                        'genre_id' => 27,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 18,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 19,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 19,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 19,
                        'genre_id' => 27,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 19,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 20,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 20,
                        'genre_id' => 8,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 20,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 20,
                        'genre_id' => 27,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 20,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 21,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 21,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 21,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 22,
                        'genre_id' => 26,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 22,
                        'genre_id' => 27,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 22,
                        'genre_id' => 29,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 22,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 23,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 23,
                        'genre_id' => 29,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 23,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 24,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 24,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 24,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 24,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 25,
                        'genre_id' => 23,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 25,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 25,
                        'genre_id' => 32,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 26,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 26,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 26,
                        'genre_id' => 27,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 26,
                        'genre_id' => 29,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 26,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 28,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 28,
                        'genre_id' => 5,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 28,
                        'genre_id' => 8,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 28,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 28,
                        'genre_id' => 27,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 28,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 29,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 29,
                        'genre_id' => 26,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 29,
                        'genre_id' => 27,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 29,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 30,
                        'genre_id' => 13,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 30,
                        'genre_id' => 15,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 30,
                        'genre_id' => 16,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 31,
                        'genre_id' => 19,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 31,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 31,
                        'genre_id' => 29,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 32,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 32,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 32,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 32,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 33,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 33,
                        'genre_id' => 6,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 33,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 33,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 33,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 34,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 34,
                        'genre_id' => 8,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 34,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 34,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 34,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 35,
                        'genre_id' => 15,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 35,
                        'genre_id' => 16,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 36,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 36,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 36,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 37,
                        'genre_id' => 16,
                        'created_at' => $date, //$date,
                        'updated_at' => $date
                    ],

                    [
                        'product_id' => 38,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 38,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 38,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 38,
                        'genre_id' => 31,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 39,
                        'genre_id' => 2,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 39,
                        'genre_id' => 21,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 39,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 40,
                        'genre_id' => 5,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 40,
                        'genre_id' => 19,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 40,
                        'genre_id' => 28,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 40,
                        'genre_id' => 29,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 41,
                        'genre_id' => 13,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 41,
                        'genre_id' => 15,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 41,
                        'genre_id' => 16,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 42,
                        'genre_id' => 13,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 42,
                        'genre_id' => 15,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 42,
                        'genre_id' => 16,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 43,
                        'genre_id' => 13,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 43,
                        'genre_id' => 15,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 43,
                        'genre_id' => 16,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 44,
                        'genre_id' => 13,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 44,
                        'genre_id' => 15,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],

                    [
                        'product_id' => 44,
                        'genre_id' => 16,
                        'created_at' => $date, //$date,
                        'updated_at' => $date

                    ],
        ];

        DB::table('products')->insert($products);
        DB::table('product_has_genres')->insert($product_has_genres);
    }
}
