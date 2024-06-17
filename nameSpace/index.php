<?php
// require_once 'App/model/User.php';
// $user = new App\model\User;


require_once 'vendor/autoload.php';
use App\model\UserStatic;
use App\model\Post;
// $user = new App\model\User;

// var_dump($user);


////////
var_dump(UserStatic::callMe());
var_dump(Post::callMe());
