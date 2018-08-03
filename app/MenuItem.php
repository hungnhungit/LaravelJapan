<?php

namespace App;

use App\Facade\LaraJapan;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{

    protected  $table = 'menu_items';

    public function menu(){
        return $this->belongsTo(LaraJapan::modelClass('Menu'));
    }

    public function children()
    {
        return $this->hasMany(Voyager::modelClass('MenuItem'), 'parent_id')
            ->with('children');
    }
}
