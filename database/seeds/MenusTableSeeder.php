<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        Menu::firstOrCreate([
            'name' => 'admin',
        ]);

        Menu::firstOrCreate([
            'name' => 'LandingPage',
        ]);

        Menu::firstOrCreate([
            'name' => 'social',
        ]);

        Menu::firstOrCreate([
            'name' => 'customers',
        ]);

        Menu::firstOrCreate([
            'name' => 'customer_locations',
        ]);

        Menu::firstOrCreate([
            'name' => 'drivers',
        ]);
    }
}
