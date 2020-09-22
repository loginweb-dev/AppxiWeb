<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;
class DataTypesTableSeeder extends Seeder
{
    public function run()
    {       
        $dataType = $this->dataType('slug', 'users');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'users',
                'display_name_singular' => __('voyager::seeders.data_types.user.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.user.plural'),
                'icon'                  => 'voyager-person',
                'model_name'            => 'TCG\\Voyager\\Models\\User',
                'policy_name'           => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller'            => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'menus');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'menus',
                'display_name_singular' => __('voyager::seeders.data_types.menu.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.menu.plural'),
                'icon'                  => 'voyager-list',
                'model_name'            => 'TCG\\Voyager\\Models\\Menu',
                'controller'            => '',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        $dataType = $this->dataType('slug', 'roles');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'roles',
                'display_name_singular' => __('voyager::seeders.data_types.role.singular'),
                'display_name_plural'   => __('voyager::seeders.data_types.role.plural'),
                'icon'                  => 'voyager-lock',
                'model_name'            => 'TCG\\Voyager\\Models\\Role',
                'controller'            => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }

        // pages ----------------------------------
        $dataType = $this->dataType('slug', 'pages');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'pages',
                'display_name_singular' => 'Pagina',
                'display_name_plural'   => 'Paginas',
                'icon'                  => 'voyager-browser',
                'model_name'            => 'App\\Page',
                'controller'            => null,
                'generate_permissions'  => 1,
                'description'           => null,
                'server_side'           => 1,
                'details'               => [
                    'order_column'         => 'id',
                    'order_display_column' => 'id',
                    'order_direction'      => 'asc',
                    'default_search_key'   => 'id',
                    'scope'                => null
                ]
            ])->save();
        }
        //pages ------------------------------------
    
        // blocks ----------------------------------
        $dataType = $this->dataType('slug', 'blocks');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'blocks',
                'display_name_singular' => 'Blocke',
                'display_name_plural'   => 'Blockes',
                'icon'                  => 'voyager-params',
                'model_name'            => 'App\\Block',
                'controller'            => null,
                'generate_permissions'  => 1,
                'description'           => null,
                'server_side'           => 1,
                'details'               => [
                    'order_column'         => 'id',
                    'order_display_column' => 'id',
                    'order_direction'      => 'asc',
                    'default_search_key'   => 'id',
                    'scope'                => null
                ]
            ])->save();
        }
        // blocks ----------------------------------
        
        // Customers ----------------------------------
        $dataType = $this->dataType('slug', 'customers');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'customers',
                'display_name_singular' => 'Cliente',
                'display_name_plural'   => 'Clientes',
                'icon'                  => 'voyager-params',
                'model_name'            => 'App\\Customer',
                'controller'            => 'App\\Http\\Controllers\\CustomerController',
                'generate_permissions'  => 1,
                'description'           => null,
                'server_side'           => 1,
                'details'               => [
                    'order_column'         => 'id',
                    'order_display_column' => 'id',
                    'order_direction'      => 'asc',
                    'default_search_key'   => 'id',
                    'scope'                => null
                ]
            ])->save();
        }
        // customers ----------------------------------

        // customer_locations ----------------------------------
        $dataType = $this->dataType('slug', 'customer_locations');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'customer_locations',
                'display_name_singular' => 'Ubicacion',
                'display_name_plural'   => 'Ubicaciones',
                'icon'                  => 'voyager-params',
                'model_name'            => 'App\\CustomerLocation',
                'controller'            => 'App\\Http\\Controllers\\CustomerLocationController',
                'generate_permissions'  => 1,
                'description'           => null,
                'server_side'           => 1,
                'details'               => [
                    'order_column'         => 'id',
                    'order_display_column' => 'id',
                    'order_direction'      => 'asc',
                    'default_search_key'   => 'id',
                    'scope'                => null
                ]
            ])->save();
        }
        // customer_locations ----------------------------------

        // drivers----------------------------------------------
        $dataType = $this->dataType('slug', 'drivers');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'drivers',
                'display_name_singular' => 'Driver',
                'display_name_plural'   => 'Drivers',
                'icon'                  => 'voyager-params',
                'model_name'            => 'App\\Driver',
                'controller'            => 'App\\Http\\Controllers\\DriverController',
                'generate_permissions'  => 1,
                'description'           => null,
                'server_side'           => 1,
                'details'               => [
                    'order_column'         => 'id',
                    'order_display_column' => 'id',
                    'order_direction'      => 'asc',
                    'default_search_key'   => 'id',
                    'scope'                => null
                ]
            ])->save();
        }
        //end drivers------------------------------------------
    }

    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}