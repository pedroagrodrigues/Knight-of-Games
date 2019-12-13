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
                        'company' => 'common',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 2, 
                        'role' => 'moderator',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],

                    [
                        'id' => 3, 
                        'role' => 'administrator',
                        'created_at' => $date, //indicate the company's start time
                        'updated_at' => $date 
                    ],
        ];

        DB::table('companies')->insert($companies);
    }
}
