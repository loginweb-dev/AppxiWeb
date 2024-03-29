<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'avatar' => 'users/default.png',
            'password' => Hash::make('password'),
            'role_id' => 1
         ]);
    }
}
