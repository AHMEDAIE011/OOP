<?php

function generator($max = 15) 
{
    for ($i=0; $i < $max; $i++)
    {
        yield $i; 
    }  
}

$gen = generator();
iterator_apply($gen,
function (iterator $it){

var_dump($it->current());
return true;
},[$gen ]);