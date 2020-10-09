<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'Usuario',
                'display_name_plural' => 'Usuarios',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menú',
                'display_name_plural' => 'Menús',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Rol',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'pages',
                'slug' => 'pages',
                'display_name_singular' => 'Pagina',
                'display_name_plural' => 'Paginas',
                'icon' => 'voyager-browser',
                'model_name' => 'App\\Page',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"id","order_direction":"asc","default_search_key":"id","scope":null}',
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'blocks',
                'slug' => 'blocks',
                'display_name_singular' => 'Blocke',
                'display_name_plural' => 'Blockes',
                'icon' => 'voyager-params',
                'model_name' => 'App\\Block',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"id","order_direction":"asc","default_search_key":"id","scope":null}',
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'customers',
                'slug' => 'customers',
                'display_name_singular' => 'Cliente',
                'display_name_plural' => 'Clientes',
                'icon' => 'voyager-params',
                'model_name' => 'App\\Customer',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\CustomerController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"id","order_direction":"asc","default_search_key":"id","scope":null}',
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'customer_locations',
                'slug' => 'customer_locations',
                'display_name_singular' => 'Ubicacion',
                'display_name_plural' => 'Ubicaciones',
                'icon' => 'voyager-params',
                'model_name' => 'App\\CustomerLocation',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\CustomerLocationController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"id","order_direction":"asc","default_search_key":"id","scope":null}',
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'drivers',
                'slug' => 'drivers',
                'display_name_singular' => 'Driver',
                'display_name_plural' => 'Drivers',
                'icon' => 'voyager-params',
                'model_name' => 'App\\Driver',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":"id","order_display_column":"id","order_direction":"asc","default_search_key":"id","scope":null}',
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-08 19:40:49',
            ),
        ));
        
        
    }
}