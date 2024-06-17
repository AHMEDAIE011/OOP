<?php
require_once 'Database.php';
class User
{

    protected Database $db;

public function __construct(Database $db ){
    $this->db = $db;
}

///////////////////////// magic Cloning اول حل
// public function __clone(){
//     $this->db =clone $this->db; //  اول حل
// }

public function clone(){
    return unserialize(serialize($this)); // تاني حل
}







    public function __toString()
    {
        return 'noooooooooooooooooooooooooooo';
    }
    public function __invoke($arg)
    {
        var_dump($arg);
    }

    public static function __set_state($arg)
    {
        var_dump($arg);
    }
}