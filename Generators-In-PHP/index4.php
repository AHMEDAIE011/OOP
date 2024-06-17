<?php

function generator($max = 15) 
{
    for ($i=0; $i < $max; $i++)
    {
        yield $i; 
    }  
}

$gen = generator();

$doubledGen = array_map(function ($item){ 
    return $item * 2;
}, iterator_to_array($gen));

var_dump($doubledGen);