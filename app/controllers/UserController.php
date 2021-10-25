<?php

namespace app\Controllers;

use app\Models\UserModel;
class UserController
{
    protected $userModel;

    public function __construct()
    {
        $userModel = new UserModel();
        $this->userModel = $userModel;
    }

    public function index()
    {
        $users = $this->userModel->getAllUser();
        include_once "views/user/list.php";
    }

    public function deleteUserById()
    {
        include_once "views/user/delete.php";
        $id = $_GET['id'];//lay tren thanh URL
        $this->userModel->deleteUserById($id);
        header("location: index.php");//or $this->index()
    }

    public function showUserDetail()
    {
        $id = $_GET['id'];//lay tren thanh URL
        $user = $this->userModel->getDetailUserById($id);
        include_once "views/user/detail.php";
    }
}