<?php


 class Database
{
protected $dsn;
protected $username;
protected $password;
protected $connection;
    

public function __construct( $dsn ,$username = null,$password = null){
    $this->dsn = $dsn;
    $this->username = $username;
    $this->password = $password;
    $this->connect() ;
}

public function connect()
{
    $this->connection = new PDO( $this->dsn , $this->username ?? null , $this->password ?? null);
}



public function __serialize()
{
    return [
        'dsn'=> 'mysqL:host=LOCALHOST;dbname=test',
        'username' => 'root',
        'pass' => 'root'
    ];
}



public function __unserialize(array $data)
{
 var_dump($data);

    // $this->dsn = $data['dsn'];
    // $this->username = $data['username'];
    // $this->pass = $data['pass'];
    // $this->connect() ;
}
}
