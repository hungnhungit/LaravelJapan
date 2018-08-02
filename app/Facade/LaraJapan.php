<?php
/**
 * Created by PhpStorm.
 * User: HungNT
 * Date: 02/08/2018
 * Time: 11:17
 */

namespace App\Facade;


use Illuminate\Support\Facades\Facade;

class LaraJapan extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'LaraJapan';
    }

}