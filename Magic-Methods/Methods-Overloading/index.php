<?php

require_once 'User.php';

$user = new User;

var_dump($user->welcome());
var_dump($user->hello('ahmed', ['age'=>14]));