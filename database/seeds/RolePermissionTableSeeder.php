<?php

use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = \App\Role::where('name','admin')->first();

        $permssions = \App\Permission::all();

        $role->permissions()->sync(
            $permssions->pluck('id')->all()
        );
    }
}
