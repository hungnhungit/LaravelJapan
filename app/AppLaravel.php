<?php
/**
 * Created by PhpStorm.
 * User: HungNT
 * Date: 02/08/2018
 * Time: 11:14
 */

namespace App;


use Illuminate\Support\Facades\Auth;

class AppLaravel
{
    protected $models = [
        'User' => User::class,
        'Menu' => Menu::class,
        'Setting' => Setting::class,
        'Permission' => Permission::class,
        'Role' => Role::class,
        'MenuItem' => MenuItem::class,
    ];

    public function model($name){
        return $this->app->make($this->model[$name]);
    }
    public function modelClass($name)
    {
        return $this->models[$name];
    }
    public function useModel($name, $object)
    {
        if (is_string($object)) {
            $object = app($object);
        }
        $class = get_class($object);
        if (isset($this->models[studly_case($name)]) && !$object instanceof $this->models[studly_case($name)]) {
            throw new \Exception("[{$class}] must be instance of [{$this->models[studly_case($name)]}].");
        }
        $this->models[studly_case($name)] = $class;
        return $this;
    }
    public function getShow(){
        return "done !!";
    }

    public function getUser($id = null){
        if(isset($id)){
            return User::findOrFail($id);
        }
        if(Auth::check()){
            return Auth::user();
        }
        return null;

    }
    public function can($role){
        if ($this->getUser()->hasPermission($role)){
            return true;
        }
        return abort(404);
    }

    public function setting($key){
        if(isset($key)){
            return $this->modelClass('Setting')::where('key',$key)->first()->value;
        }
        return '';
    }


}