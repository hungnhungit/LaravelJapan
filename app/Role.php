<?php

namespace App;

use App\Facade\LaraJapan;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name' , 'display_name'];

    public function permissions(){
        return $this->belongsToMany(LaraJapan::modelClass('Permission'));
    }
}
