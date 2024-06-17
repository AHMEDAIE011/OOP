<?php

interface polygon
{
 public function clacArea(int $x,int $y);
}



// عشان تورث من انترفيس بتكتب ال امبليمنت + انك لازم تكتب الفنكشن اللي موجوده  
class Triangle implements polygon 
{
    public function clacArea($x,$y)
    {
        return $x * $y * 0.5;
    }   
}

class RecTangle implements polygon 
{
    public function clacArea($x,$y)
    {
        return $x * $y ;
    }   
}