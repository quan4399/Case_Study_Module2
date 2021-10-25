<?php

include_once "app/models/DBConnect.php";
include_once "app/models/UserModel.php";
include_once "app/controllers/loginController.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang đăng ký</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container d-flex justify-content-center" >
    <div class="col-12 col-md-6 ">

        <div class="card">
            <div class="card-header text-center">
                Login
            </div>
            <div class="card-body">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="userName">Tên người dùng</label>
                        <input type="text" name="userName" class="form-control" id="userName" placeholder="nhập tên ">
                    </div>
                    <div class="form-group">
                        <label for="userEmail">Email</label>
                        <input type="email" name="userEmail" class="form-control" id="userEmail" placeholder="abc123@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="userPhone">Số điện thoại</label>
                        <input type="text" name="userPhone" class="form-control" id="userPhone">
                    </div>
                    <div class="form-group">
                        <label for="userAddress">Địa chỉ</label>
                        <input type="text" name="userAddress" class="form-control" id="userAddress">
                    </div>
                    <div class="form-group">
                        <label for="inputAccount">Tên đăng nhập</label>
                        <input type="text" name="userAccount" class="form-control" id="inputAccount" aria-describedby="emailHelp" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="userPassword" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="re-password">Nhập lại password</label>
                        <input type="password" name="userPassword" class="form-control" id="re-password" placeholder="Re-Password">
                    </div>
                    <button  type="submit" class="btn btn-primary text-white" >Register</button>
                </form>

            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $userModel =new \app\Models\userModel();

    $array = [
        "userName" => $_POST["userName"],
        "userEmail" => $_POST["userEmail"],
        "userPhone" => $_POST["userPhone"],
        "userAddress" => $_POST["userAddress"],
        "userAccount"=>$_POST['userAccount'],
        "userPassword"=> $_POST['userPassword'],
        "role"=> 1
    ];

    $userModel->addUser($array);
    header("location: index.php");
}
?>
