<?php
session_start();

$loginStatus = $_SESSION['isLogin'];
if (!isset($loginStatus) || !$loginStatus) {
    header('location: home.php');
}

include_once "app/models/DBConnect.php";
include_once "app/models/UserModel.php";
include_once "app/controllers/loginController.php";

use app\Controllers\loginController;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light container" >
    <div class="container">

        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=logout">Logout</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link "> xin chao <?php echo $_SESSION['userName'] ?></a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<div class="content container">
    <div class="row pt-2">
        <div class="col-12 col-md-3">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    Danh mục
                </button>
                <a class="list-group-item list-group-item-action" href="index.php?page=bills&action=show-list">Quản lý
                    hoá đơn</a>
                <a class="list-group-item list-group-item-action" href="index.php?page=show-list-product">Quản
                    lý sản phẩm</a>
                <a class="list-group-item list-group-item-action" href="index.php?page=show-list-user">Quản lý người dùng</a>
            </div>
        </div>
        <div class="col-12 col-md-9">
            <?php
            include_once('router.php');
            ?>
        </div>
    </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
                integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
                integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
                crossorigin="anonymous"></script>
</body>
</html>
