<?php

namespace App;

use App\Facade\LaraJapan;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    public function items(){
        return $this->hasMany(LaraJapan::modelClass('MenuItem'));
    }

    public function parents(){
        return $this->hasMany(LaraJapan::modelClass('MenuItem'))->whereNull('parent_id');
    }





}
