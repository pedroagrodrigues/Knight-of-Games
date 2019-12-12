<?php

use Illuminate\Database\Seeder;

class SocialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $socials = [
            [
                'id' => 1, 
                'company' => 'Google', 
            ],

            [
                'id' => 2, 
                'company' => 'Facebook', 
            ],

            [
                'id' => 3, 
                'company' => 'Twitter', 
            ],
        ];

        DB::table('social')->insert($socials);
    }
}
