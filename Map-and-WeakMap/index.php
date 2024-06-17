<?php
require_once 'User.php';

////////   Map   /////////////////
$storage = new \SplObjectStorage;
$user = new User;
$storage[$user] =  'ahmed';

var_dump($storage);
echo "<br>";

unset($user);
var_dump($storage);
echo "<br>";

////////   weakMap   /////////////////
$storage2 = new \weakMap;
$user2 = new User;
$storage2[$user2] =  'mohamed';

var_dump($storage2);
echo "<br>";

unset($user2);
var_dump($storage2);