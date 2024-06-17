<?php


// Generators

function generator($max = 15) 
{
    $array = [];
    for ($i=0; $i < $max; $i++) { 
     $array[]= $i;
    }  
    return $array;  
}
/// منصحش باستخدامهم عشان هيسحب الميموري اللي علي الجهاز كلها
// var_dump( generator(1000000000));
// var_dump( generator(PHP_INT_MAX));
 var_dump( generator());    