<?php
include_once "app/models/DBConnect.php";
include_once "app/models/ProductModel.php";
include_once "app/controllers/loginController.php";
include_once "app/controllers/ProductController.php";
include_once "app/controllers/UserController.php";

use app\Controllers\productController;
use app\Controllers\UserController;
?>

<?php
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;
$productController = new productController();
$userController = new UserController();
switch ($page) {
    case "logout":
        $loginController = new \app\Controllers\loginController();
        $loginController->logout();
        break;
    case "show-list-product":
        $productController->index();
        break;
    case "add-product":
        $productController->addProduct();
        break;
    case "edit-product":
        $productController->updateProduct();
        break;
    case "delete-product":
        $productController->deleteProductById();
        break;
    case "detail-product":
        $productController->showDetail();
        break;

    case "delete-user":
        $userController->deleteUserById();
        break;
    case "show-list-user":
        $userController->index();
        break;
    case "detail-user":
        $userController->showUserDetail();
        break;



    default :
       // header("location:home.php");
        $productController->index();
        break;
}