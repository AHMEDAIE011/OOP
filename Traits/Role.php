<?php

trait Role
{
 

    public static function has($role)
   {
        return false;
   }

   public function attach($user,$role)
   {
        return  true;
   }

   public function detach($user,$role)
   {
        return true;
   }    
}