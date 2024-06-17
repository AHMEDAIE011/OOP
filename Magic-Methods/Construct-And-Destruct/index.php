<?php

require_once 'Database.php';

$db = new Database;
$db2 = new Database;
$db3 = new Database;

var_dump($db->getInstance());
var_dump($db2->getInstance());
var_dump($db3->getInstance());
