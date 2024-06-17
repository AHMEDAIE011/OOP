<?php



class User
{
    public Database $db;
    public function __construct(Database $db)
    {
        $this->db = $db; //علي مستوي الانستنس (الكلاس) كله set 
    }

}







