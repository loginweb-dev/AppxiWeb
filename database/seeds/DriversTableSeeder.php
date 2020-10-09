<?php

use Illuminate\Database\Seeder;

class DriversTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('drivers')->delete();
        
        \DB::table('drivers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'phone' => '59160180482',
                'user_id' => 1,
                'created_at' => '2020-10-08 19:39:23',
                'updated_at' => '2020-10-08 19:41:17',
                'deleted_at' => NULL,
                'photo_plaque' => 'drivers/October2020/lJ04TNVVCISiFOa1pc5n.jpg',
                'photo_license' => 'drivers/October2020/DquGMNZPM4ArTMYShWhm.jpg',
                'photo_car' => 'drivers/October2020/3h2Q0dGlYOgZfXhRIjiR.jpg',
                'photo_qr' => 'drivers/October2020/Vjii2XefTaGS5xu4UURp.png',
                'photo_ci' => 'drivers/October2020/AdrCziqC6IcxsinHGpIR.jpg',
                'bank' => '2',
                'payment_time' => '1',
                'payment_options' => '2',
                'status' => '1',
                'address' => 'zona santa ines',
                'latitude' => NULL,
                'longitude' => NULL,
            ),
        ));
        
        
    }
}