<?php

require_once('User.php');
      

$user = new User;
$user2 = new User;

var_dump(User::getName());
var_dump($user);
var_dump($user2);




///////////////////////Static-Keywords

function num()
{
    //  $i = 1; كدا هيعمل ايرور عشان عمل حد لا نهائي
    static $i = 1; 
    if ($i > 10) {
        return;
    }
    $i++;
    echo ($i);
    echo '<br>';
    
    num();


    echo ($i);
}
num();
