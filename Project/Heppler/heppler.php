<?php
if(!function_exists('dd')){
    function dd(){
        array_map(function ($value){
            var_dump($value);
        }, func_get_args());
    }
}

