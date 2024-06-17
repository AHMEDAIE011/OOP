<?php
 
class User
{
    public static $frisrtName = 'ahmed';
    
    public static function getName()
    {
        return self::$frisrtName; // self = User 
    }

////////////////////////////////////////////////////////////
    // function instance(){
    //     return $this;
    // }

    // function instance2(){
    //     return new self;
    // }
}