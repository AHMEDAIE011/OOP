<?php


// Generators -> current() :max | getreturn() :max | key() :max | send(mixed $value) :max 
//   throw(throwable $exception) :max | 
//  next() :void |  rewind() :void |  wakeup() :void |  valid() :bool |



//  current() || next()
function generator($max = 15) 
{
    for ($i=0; $i < $max; $i++)
    {
        yield $i; 
    }  
}

// var_dump( generator(PHP_INT_MAX));
$gen = generator();

foreach ($gen as $item) {
    var_dump($item);    
}
