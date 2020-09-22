<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;
class MenuItemsTableSeeder extends Seeder
{
    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();

        $toolsMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => __('voyager::seeders.menu_items.tools'),
            'url'     => '',
        ]);
        if (!$toolsMenuItem->exists) {
            $toolsMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-tools',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }
            $count = 0;
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => __('voyager::seeders.menu_items.media'),
                'url'     => '',
                'route'   => 'voyager.media.index',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-images',
                    'color'      => null,
                    'parent_id'  => $toolsMenuItem->id,
                    'order'      => $count++
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => __('voyager::seeders.menu_items.users'),
                'url'     => '',
                'route'   => 'voyager.users.index',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-person',
                    'color'      => null,
                    'parent_id'  => $toolsMenuItem->id,
                    'order'      => $count++
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Menus',
                'url'     => '',
                'route'   => 'voyager.menus.index',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-list',
                    'color'      => null,
                    'parent_id'  => $toolsMenuItem->id,
                    'order'      => $count++
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Paginas',
                'url'     => '',
                'route'   => 'voyager.pages.index',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-paypal',
                    'color'      => null,
                    'parent_id'  => $toolsMenuItem->id,
                    'order'      => $count++,
                ])->save();
            }  
        
        //--------------------------------------------
        $AdminMenuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'Administracion',
            'url'     => '',
        ]);
        if (!$AdminMenuItem->exists) {
            $AdminMenuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-params',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 2,
            ])->save();
        }
            $count = 0;
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Clientes',
                'url'     => '',
                'route'   => 'voyager.customers.index',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => 'voyager-double-right',
                    'color'      => null,
                    'parent_id'  => $AdminMenuItem->id,
                    'order'      => $count++
                ])->save();
            }
        

        //-------------------------- BREAD -------------------
            $menu = Menu::where('name', 'customers')->firstOrFail();
            $count=1;
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Listar los Clientes',
                'url'     => 'admin/customers/1',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'Nuevo Cliente',
                'url'     => 'admin/customers/create',
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'divider',
                'url'     => null,
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_self',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title'   => 'setting',
                'url'     => null,
                'route'   => null
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target'     => '_blank',
                    'icon_class' => null,
                    'color'      => null,
                    'parent_id'  => null,
                    'order'      => $count++,
                ])->save();
            }

        //-------------------------------------------------
    }
}