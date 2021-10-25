<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang sản phẩm</title>
</head>
<body>
<h3>Quản lý sản phẩm</h3>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Mã sản phẩm</th>
        <th scope="col">Tên sản phẩm</th>
        <th scope="col">Nhà sản xuất</th>
        <th scope="col">Giá</th>
        <th scope="col">Ảnh</th>
    </tr>
    </thead>
    <tbody>
    <a href="index.php?page=add-product">
        <button type="button" class="btn btn-primary">Thêm sản phẩm</button>
    </a>
    <?php foreach ($products as $index => $product): ?>
        <tr style="text-align: center ">
            <th scope="row"><?php echo $index + 1 ?></th>
            <td><?php echo $product['productId'] ?></td>
            <td><?php echo $product['productName'] ?></td>
            <td><?php echo $product['productBrand'] ?></td>
            <td><?php echo $product['productPrice'] ?></td>
            <td><img style="width: 100px;height: 100px" src="image/<?php echo $product['productImage'] ?>"
                     alt="không có ảnh"></td>
            <td><a href="index.php?page=detail-product&id=<?php echo $product['productId'] ?>">
                    <button type="button" class="btn btn-info text-white">Detail</button>
                </a></td>
            <td><a href="index.php?page=edit-product&id=<?php echo $product['productId'] ?>">
                    <button type="button" class="btn btn-warning text-white"> Update</button>
                </a></td>
            <td><a onclick="confirm('are you sure delete this ?')"
                   href="index.php?page=delete-product&id=<?php echo $product['productId'] ?>">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>

