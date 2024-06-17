<?php

require_once 'Database.php';
require_once 'User.php';

$db = new Database; // Dependency
$user = new User($db); // اللي فوق Dependencyدا الكلاس الي محتاج ال 

var_dump($user);
var_dump($user->db->getInstance());