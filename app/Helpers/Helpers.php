<?php



function LaraJapanAssert($link){
}
function test(){

}

if(!function_exists('setting')){
    function setting($key){
        return \App\Facade\LaraJapan::setting($key);
    }

}