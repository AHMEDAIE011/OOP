<?php

class User implements IteratorAggregate
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }




    
    public function getIterator()
    {
        return new ArrayIterator($this->name) ;
    }




}