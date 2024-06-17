<?php
require_once 'User.php';

$user = new User('ahmed');
$user2 = new User('mohamed');
$user3 = new User('ali');
$user4 = new User('sayed');

$collection = [$user ,$user2 ,$user3 ,$user4 ] ;
// var_dump($collection);

foreach ($collection as $object) 
{
    echo $object->getName();

}