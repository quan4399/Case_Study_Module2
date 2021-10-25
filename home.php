<?php
include_once "app/models/DBConnect.php";
include_once "app/models/UserModel.php";
include_once "app/controllers/loginController.php";
include_once "app/controllers/ProductController.php";
include_once "app/models/ProductModel.php";

use app\Controllers\loginController;

?>
<?php include_once "layouts/header.php" ?>
<?php $productModel = new \app\Models\ProductModel();
$products = $productModel->getAllProduct();// quan trong can nho
?>
<div id="main" class="container" >
    <div class="product">
        <div class="row mt-3 text-center">
            <?php foreach ($products as $product): ?>
                <div class="col-4 mb-3">
                    <div class="card">
                        <img src="image/<?php echo $product['productImage'] ?>" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product['productName'] ?></h5>
                            <p class="card-text"><?php echo $product['productBrand'] ?></p>
                            <p><?php echo $product['productPrice'] ?></p>
                            <a href="#" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include_once "layouts/footer.php"; ?>

