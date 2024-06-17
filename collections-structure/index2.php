<?php
require_once 'User2.php';

///////////  IteratorAggregate  ///////////////

$collection = new User(['ahmed','mohamed','ali','sayed']);
// var_dump($collection);
foreach ($collection as $object) 
{
    echo $object .'<br>';

}