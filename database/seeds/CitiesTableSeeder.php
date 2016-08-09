<?php

use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cities')->delete();
        
        \DB::table('cities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'cityname' => 'Скопје',
                'created_at' => '2016-07-13 12:23:38',
                'updated_at' => '2016-07-13 12:23:38',
            ),
            1 => 
            array (
                'id' => 2,
                'cityname' => 'Дебел',
                'created_at' => '2016-08-03 10:51:27',
                'updated_at' => '2016-08-03 10:51:27',
            ),
            2 => 
            array (
                'id' => 3,
                'cityname' => 'Lorem ',
                'created_at' => '2016-08-03 10:59:26',
                'updated_at' => '2016-08-03 10:59:26',
            ),
        ));
        
        
    }
}
