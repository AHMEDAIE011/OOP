<?php


// Generators -> current() :max | getreturn() :max | key() :max | send(mixed $value) :max 
//   throw(throwable $exception) :max | 
//  next() :void |  rewind() :void |  wakeup() :void |  valid() :bool |



function generator($max = 15) 
{
    for ($i=0; $i < $max; $i++)
    {
        yield $i; 
    }  
    
}

//  current() || next()
$gen = generator();
 var_dump($gen->current());    
 $gen->next();
 var_dump($gen->current());    
