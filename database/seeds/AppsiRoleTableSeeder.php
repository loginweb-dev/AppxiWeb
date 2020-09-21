<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use TCG\Voyager\Models\Role;

class AppsiRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);
        $role = Role::firstOrNew(['name' => 'administrador']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Administrador',
            ])->save();
        }
        $role = Role::firstOrNew(['name' => 'conductor']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Conductor',
            ])->save();
        }
        $role = Role::firstOrNew(['name' => 'gerente']);
        if (!$role->exists) {
            $role->fill([
                'display_name' => 'Gerente',
            ])->save();
        }
    }
}
