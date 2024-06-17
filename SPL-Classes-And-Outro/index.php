<?php
require_once 'Collection.php';
require_once 'helpers.php';

// ////////////helpers.php
$collect = collect([1,2,3,4])->items;  
var_dump($collect);
echo '<br>';
var_dump($collect[0]);  
echo '<br>';
$collect['name'] = 'value';
var_dump($collect);
echo '<br>';


$collection = new Collection(['ahmed','mohamed','mahmoud']);

//////////////ArrayAccess
$collection['name'] = 'sayed';
var_dump($collection);
 echo '<br>';
var_dump($collection[0]);  
echo '<br>';

unset($collection[0]); //unset
echo '<br>';
var_dump($collection);
echo '<br>';

var_dump(isset($collection[2])); //offsetExists
echo '<br>';


//////////////Serializable
$s = serialize($collection);
var_dump($s);
echo '<br>';


///////////iteratorr
foreach ($collection as $object) 
{
    echo "{$object} <br>";

}   
echo '<br>';

////////////////count
echo count($collection);