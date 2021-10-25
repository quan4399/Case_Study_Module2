<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa sản phẩm</title>
</head>
<body>
<form method="POST">
    <div class="row mb-3">
        <label for="productId" class="col-sm-2 col-form-label">Mã sản phẩm</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="productId" name="productId"
                   value="<?php echo $product['productId'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="productName" class="col-sm-2 col-form-label">Tên sản phẩm</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="productName" name="productName"
                   value="<?php echo $product['productName'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="productBrand" class="col-sm-2 col-form-label">Nhà sản xuất</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="productBrand" name="productBrand"
                   value="<?php echo $product['productBrand'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="productPrice" class="col-sm-2 col-form-label">Giá</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="productPrice" name="productPrice"
                   value="<?php echo $product['productPrice'] ?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="productImage" class="col-sm-2 col-form-label">Ảnh</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" id="productImage" name="productImage"
                   value="<?php echo $product['productImage'] ?>">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Sửa</button>
</form>
</body>
</html>

