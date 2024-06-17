<?php

abstract class polygon
{
    protected $area;

    public function getArea()
    {
        return $this->area;
    }

    abstract  public function calculateArea($dimentions);
}
////////////////////////////////////////////////////////////////
class squre extends polygon
{
      public function calculateArea($dimentions)
      {
        $area = $dimentions * $dimentions;
        $this->area = $area;
        return $area;
      }

    // public function clacArea($x,$y)  
    // {
    //     return $x * $y * 0.5;
    // }   
}

$squre = new squre;

$squre->calculateArea(5);

echo $squre->getArea();   
////////////////////////////////////////////////////////////////

class Triangle extends polygon
{

      public function calculateArea($dimentions)
      {
        $area = $dimentions[0] * $dimentions[1] * 0.5;
        $this->area = $area;
        return $area;
      }
 
}

$Triangle = new Triangle;

$Triangle->calculateArea ([10 , 10]);

echo "<pre>";
echo $Triangle->getArea();