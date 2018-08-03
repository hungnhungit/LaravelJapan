<?php

use Illuminate\Database\Seeder;
use App\Menu;
use App\MenuItem;
class MenuItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menu = Menu::where('name', 'admin')->firstOrFail();
        $menuItem = MenuItem::firstOrNew([
            'menu_id' => $menu->id,
            'title'   => 'home',
            'url'     => '',
        ]);
        if (!$menuItem->exists) {
            $menuItem->fill([
                'target'     => '_self',
                'icon_class' => 'voyager-boat',
                'color'      => null,
                'parent_id'  => null,
                'order'      => 1,
            ])->save();
        }
    }
}
