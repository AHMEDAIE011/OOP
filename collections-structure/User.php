<?php

class User
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName($name)
    {
        return $this->name;
    }




}