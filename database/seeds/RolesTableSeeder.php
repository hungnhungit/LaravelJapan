<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = \App\Role::firstOrNew(['name'=>'admin']);

        if(!$role->exits){
            $role->fill([
                'display_name' => 'Admin'
            ])->save();
        }

        $role1 = \App\Role::firstOrNew(['name'=>'editor']);

        if(!$role1->exits){
            $role1->fill([
                'display_name' => 'Editor'
            ])->save();
        }
    }
}
