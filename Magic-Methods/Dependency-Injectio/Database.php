<?php

class Database
{
    protected static $connection;


    public function __construct()
    {
         self::connect();
    }

    public function connect()
    {
        if (!self::$connection) {
            self::$connection = new PDO("sqlite:database/database.sqlite");
        }
          return self::$connection;
    }
     public function getInstance()
    {
        return self::$connection;
    }


    /////////////////////////////// functionعلي مستوي ال 
    // protected $connection;
    // public function __construct()
    // {
    //     $this->connection = new PDO("sqlite:database/database.sqlite");
    // }

    // public function getInstance()
    // {
    //     return $this->connection;
    // }

}