<?php

namespace App\Traits;

trait hasRelations{
    public function hasRole($name){
        $roles = $this->role()->pluck('name')->toArray();
        foreach ((is_array($name) ? $name : [$name]) as $role) {
            if (in_array($role, $roles)) {
                return true;
            }
        }
        return false;
    }

    public function permission_all(){
        return $this->role->permissions->flatten()->pluck('key')->toArray();
    }

    public function hasPermission($name){

        return in_array($name , $this->permission_all());

    }

}