<?php

namespace App;

use App\Facade\LaraJapan;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['key','table_name'];

    public function roles(){
        $this->belongsToMany(LaraJapan::modelClass('Role'));
    }

    public static function permissionNew($key){
        self::firstOrCreate(['key' => 'bower_'. $key,'table_name'=>$key]);
        self::firstOrCreate(['key' => 'read_'. $key,'table_name'=>$key]);
        self::firstOrCreate(['key' => 'edit_'. $key,'table_name'=>$key]);
        self::firstOrCreate(['key' => 'add_'. $key,'table_name'=>$key]);
        self::firstOrCreate(['key' => 'delete_'. $key,'table_name'=>$key]);
    }
}
