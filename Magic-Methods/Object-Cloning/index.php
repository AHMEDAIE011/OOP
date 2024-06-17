<?php

require_once 'User.php';
require_once 'Database.php';
$db = new Database ('sqlite:database/database.sqlite');
$user = new User($db);

echo($user); // toString
$user('hello'); // invoke

$user->AHMED = 'ahmed';
var_export($user); // set_state


//////////////////////////////////Cloning
////////////////////////// shalo copy
// نسخه من نفس الانيستنس \\
// pas By refrins as instens Number
// $user2 = $user;
// // $user2 = &$user;
// // $user2 = null;
// var_dump($user);
// var_dump($user2);

///////////////////////// magic Cloning
//$user2 =clone $user; ////  اول حل
$user2 = $user->clone(); ////  تاني حل

var_dump($user);
var_dump($user2);
