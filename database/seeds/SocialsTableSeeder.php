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
        $date = date('Y-m-d H:i:s');
        $socials = [
            [
                'id' => 1, 
                'company' => 'Google', 
                'created_at' => $date,
                'updated_at' => $date
            ],

            [
                'id' => 2, 
                'company' => 'Facebook', 
                'created_at' => $date,
                'updated_at' => $date
            ],

            [
                'id' => 3, 
                'company' => 'Twitter',
                'created_at' => $date,
                'updated_at' => $date 
            ],
        ];

        DB::table('socials')->insert($socials);
    }
}
