<?php

require_once 'Database.php';

$db = new Database ('sqlite:database/database.sqlite');


/////////////////////////////////////////////////
//                        الفرق بين 
//  (serialize و unserialize) || (json_encode , json_decode)

 $j = json_encode( $db );
 var_dump($j);
 var_dump(json_decode($j ));
 
/////////////////////////////////////////////////////
 $z = serialize( $db );
 var_dump($z);
 var_dump(unserialize($z ));


//  file_put_contents('db.txt',$z);












/////////////////////////////////////////
// $S = serialize(['a'=>1,"b"=>2]);
// $a = json_encode (['a'=>1,"b"=>2]);

// var_dump($S);
// var_dump($a);