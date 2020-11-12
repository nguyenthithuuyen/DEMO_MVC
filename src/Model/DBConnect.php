<?php


namespace App\Model;

use PDO;

class DBConnect
{
    protected $dsn;
    protected $username;
    protected $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=blog';
        $this->username = 'root';
        $this->password = '123456@Abc';
    }

    public function connect()
    {
        $connect =new PDO($this->dsn,$this->username,$this->password);
        return $connect;
    }
}