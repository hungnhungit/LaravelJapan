<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Permission::permissionNew('menus');
        \App\Permission::permissionNew('roles');
        \App\Permission::permissionNew('settings');
        \App\Permission::permissionNew('permissions');


    }


}
