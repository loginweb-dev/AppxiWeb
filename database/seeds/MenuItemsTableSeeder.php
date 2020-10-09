<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Herramientas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => NULL,
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Multimedia',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => 1,
                'order' => 0,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Usuarios',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => 1,
                'order' => 1,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Menus',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 1,
                'order' => 2,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Paginas',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-paypal',
                'color' => NULL,
                'parent_id' => 1,
                'order' => 3,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => 'voyager.pages.index',
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Administracion',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-params',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => NULL,
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Clientes',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-double-right',
                'color' => NULL,
                'parent_id' => 6,
                'order' => 0,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => 'voyager.customers.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Drivers',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-double-right',
                'color' => NULL,
                'parent_id' => 6,
                'order' => 1,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => 'voyager.drivers.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 4,
                'title' => 'Listar los Clientes',
                'url' => 'admin/customers/1',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => NULL,
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 4,
                'title' => 'Nuevo Cliente',
                'url' => 'admin/customers/create',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => NULL,
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 4,
                'title' => 'divider',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => NULL,
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'menu_id' => 4,
                'title' => 'setting',
                'url' => '',
                'target' => '_blank',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => NULL,
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'menu_id' => 6,
                'title' => 'Listar los Choferes',
                'url' => 'admin/drivers/1',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => NULL,
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'menu_id' => 6,
                'title' => 'Nuevos Choferes',
                'url' => 'admin/drivers/create',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => NULL,
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'menu_id' => 6,
                'title' => 'divider',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => NULL,
                'parameters' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'menu_id' => 6,
                'title' => 'setting',
                'url' => '',
                'target' => '_blank',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2020-10-04 01:07:14',
                'updated_at' => '2020-10-04 01:07:14',
                'route' => NULL,
                'parameters' => NULL,
            ),
        ));
        
        
    }
}