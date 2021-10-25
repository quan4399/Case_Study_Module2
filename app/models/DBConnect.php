<?php

namespace app\Models;

use PDO;
use PDOException;

class DBConnect
{
    public string $username;
    public string $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            return new PDO("mysql:host=localhost;dbname=case_study", $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Database error";
            exit();
        }
    }

}