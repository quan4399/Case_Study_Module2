<?php

namespace app\Controllers;

use app\Models\UserModel;

class loginController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }

    public function login($request)
    {
        $userAccount = $request["userAccount"];
        $userPassword =$request["userPassword"];
        $isAccountExits = $this->userModel->checkAccount($userAccount, $userPassword);
        if ($isAccountExits['SL'] != 0) {
            $_SESSION['isLogin'] = true;
            header('location: index.php');//tai khoan ton tai chuyen huong ve trang index
        } else {

            echo "Account not exist";//tai khoan khong ton tai van dung tai trang login
        }
    }

    public function logout()
    {
        $_SESSION['isLogin'] = false;
        header('location: login.php');
    }

    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] === "GET") {
            include_once "register.php";
        } else {
            $array = [
                "userName" => $_POST["userName"],
                "userEmail" => $_POST["userEmail"],
                "userPhone" => $_POST["userPhone"],
                "userAddress" => $_POST["userAddress"],
                "userAccount"=>$_POST['userAccount'],
                "userPassword"=> $_POST['userPassword'],
                "role"=> 1
            ];
            $this->userModel->addUser($array);
            /* Có thể viết :::: $this->index(); trở về trang index mà trang index là list bởi getall*/
            header("location: index.php ");
        }
    }
}