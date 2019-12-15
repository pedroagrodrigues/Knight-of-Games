<?php

use Illuminate\Database\Seeder;

class ProductsWebsitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = date('Y-m-d H:i:s');
        $websites = [
                        [
                            'id' => 1,	
                            'website' => 'Kinguin',
                            'rating' => '4',
                            'blacklist' => false,
                            'created_at' => $date,
                            'updated_at' => $date
                        ],

                        [
                            'id' => 2,	
                            'website' => 'Humble Bundle',
                            'rating' => '4',
                            'blacklist' => false,
                            'created_at' => $date,
                            'updated_at' => $date
                        ],

                        
                        [
                            'id' => 3,	
                            'website' => 'Green Man Gaming',
                            'rating' => '4',
                            'blacklist' => false,
                            'created_at' => $date,
                            'updated_at' => $date
                        ],

                        [
                            'id' => 4,	
                            'website' => 'Origin - Electronic Arts',
                            'rating' => '4',
                            'blacklist' => false,
                            'created_at' => $date,
                            'updated_at' => $date
                        ],

                        [
                            'id' => 5,	
                            'website' => 'Ubisoft',
                            'rating' => '4',
                            'blacklist' => false,
                            'created_at' => $date,
                            'updated_at' => $date
                        ],

                        [
                            'id' => 6,	
                            'website' => 'Steam - Valve Corporation',
                            'rating' => '4',
                            'blacklist' => false,
                            'created_at' => $date,
                            'updated_at' => $date
                        ],

                        [
                            'id' => 7,	
                            'website' => 'Battle.net - Blizzard Entertainment',
                            'rating' => '4',
                            'blacklist' => false,
                            'created_at' => $date,
                            'updated_at' => $date
                        ],

                        [
                            'id' => 8,	
                            'website' => 'Rockstar Games Social Club',
                            'rating' => '4',
                            'blacklist' => false,
                            'created_at' => $date,
                            'updated_at' => $date
                        ],

                        [
                            'id' => 9,	
                            'website' => 'Microsoft Store',
                            'rating' => '4',
                            'blacklist' => false,
                            'created_at' => $date,
                            'updated_at' => $date
                        ],

                        [
                            'id' => 10,	
                            'website' => 'Epic Store',
                            'rating' => '4',
                            'blacklist' => false,
                            'created_at' => $date,
                            'updated_at' => $date
                        ],

        ];
        
        $product_has_websites = [

            [
                'product_id' => 2,
                'website_id' => 1,
                'price' => 56.12,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 2,
                'website_id' => 2,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 2,
                'website_id' => 3,
                'price' => 55.19,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 2,
                'website_id' => 6,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 2,
                'website_id' => 8,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 1,
                'website_id' => 1,
                'price' => 56.12,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 1,
                'website_id' => 2,
                'price' => 14.66,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 1,
                'website_id' => 6,
                'price' => 49.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 3,
                'website_id' => 6,
                'price' => 39.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 4,
                'website_id' => 2,
                'price' => 29.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 4,
                'website_id' => 3,
                'price' => 29.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 4,
                'website_id' => 6,
                'price' => 29.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 4,
                'website_id' => 8,
                'price' => 29.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 5,
                'website_id' => 1,
                'price' => 4.76,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 5,
                'website_id' => 2,
                'price' => 29.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 5,
                'website_id' => 3,
                'price' => 29.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 5,
                'website_id' => 6,
                'price' => 29.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 7,
                'website_id' => 1,
                'price' => 1.28,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 8,
                'website_id' => 1,
                'price' => 8.83,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 8,
                'website_id' => 2,
                'price' => 54.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 8,
                'website_id' => 3,
                'price' => 54.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 8,
                'website_id' => 6,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 9,
                'website_id' => 1,
                'price' => 27.55,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 9,
                'website_id' => 2,
                'price' => 19.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 9,
                'website_id' => 3,
                'price' => 19.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 9,
                'website_id' => 6,
                'price' => 19.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 10,
                'website_id' => 1,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 10,
                'website_id' => 2,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 10,
                'website_id' => 3,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 10,
                'website_id' => 7,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 11,
                'website_id' => 4,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 11,
                'website_id' => 1,
                'price' => 35.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 11,
                'website_id' => 2,
                'price' => 41.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 11,
                'website_id' => 3,
                'price' => 56.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 11,
                'website_id' => 4,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 13,
                'website_id' => 10,
                'price' => 49.49,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 14,
                'website_id' => 1,
                'price' => 5.62,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 14,
                'website_id' => 2,
                'price' => 22.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 14,
                'website_id' => 3,
                'price' => 22.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 14,
                'website_id' => 6,
                'price' => 20.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 15,
                'website_id' => 1,
                'price' => 56.12,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 15,
                'website_id' => 2,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 14,
                'website_id' => 3,
                'price' => 53.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 15,
                'website_id' => 4,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 15,
                'website_id' => 6,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 16,
                'website_id' => 1,
                'price' => 45.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 16,
                'website_id' => 2,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 16,
                'website_id' => 3,
                'price' => 56.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 16,
                'website_id' => 4,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 17,
                'website_id' => 1,
                'price' => 35.12,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 17,
                'website_id' => 2,
                'price' => 38.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 17,
                'website_id' => 3,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 17,
                'website_id' => 10,
                'price' => 38.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 18,
                'website_id' => 1,
                'price' => 1.19,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 18,
                'website_id' => 2,
                'price' => 19.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 18,
                'website_id' => 3,
                'price' => 19.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 18,
                'website_id' => 6,
                'price' => 19.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 19,
                'website_id' => 1,
                'price' => 3.39,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 19,
                'website_id' => 2,
                'price' => 19.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 19,
                'website_id' => 3,
                'price' => 19.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 19,
                'website_id' => 6,
                'price' => 19.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 20,
                'website_id' => 1,
                'price' => 21.45,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 20,
                'website_id' => 2,
                'price' => 19.79,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 20,
                'website_id' => 3,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            [
                'product_id' => 20,
                'website_id' => 6,
                'price' => 59.99,
                'created_at' => $date,
                'updated_at' => $date,
            ],

        ];
        DB::table('websites')->insert($websites);
        DB::table('product_has_website')->insert($product_has_websites);
    }
}
