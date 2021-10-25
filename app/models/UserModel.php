<?php

namespace app\Models;

use PDO;
use PDOException;
class userModel
{
    public $pdo;

    public function __construct()
    {
        $database = new DBConnect("root", "");
        $this->pdo = $database->connect();
    }

    function checkAccount($userAccount, $userPassword)
    {
        $sql = "SELECT COUNT(userId) as 'SL' FROM users WHERE userAccount = ? AND userPassword = ? ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $userAccount);
        $stmt->bindParam(2, $userPassword);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getAllUser()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $users = $stmt->fetchAll();
        return $users;
    }

    public function getDetailUserById($id)
    {
        $sql = "SELECT * FROM users where userId= :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":id", $id);//var : $id la id truyen vao
        $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }

    public function deleteUserById($id)
    {
        $sql = "DELETE FROM users where userId= :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function addUser($array)
    {
        $sql = "INSERT INTO users(userName,userEmail,userPhone,userAddress,userAccount,userPassword,role) values (:userName,:userEmail,:userPhone,:userAddress,:userAccount,:userPassword,:rolee) ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam("userName",$array['userName']);
        $stmt->bindParam("userEmail",$array['userEmail']);
        $stmt->bindParam("userPhone",$array['userPhone']);
        $stmt->bindParam("userAddress",$array['userAddress']);
        $stmt->bindParam("userAccount",$array['userAccount']);
        $stmt->bindParam("userPassword",$array['userPassword']);
        $stmt->bindParam("rolee",$array['role']);
        $stmt->execute();
    }


}