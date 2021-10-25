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
<h3>Chi tiết sản phâm</h3>
<table>
    <tr>
        <th>Mã sản phẩm</th>
        <th>Tên sản phẩm</th>
        <th>Nhà sản xuất</th>
        <th>Giá</th>
        <th>Ảnh</th>
    </tr>

        <tr style="text-align: center">
            <td><?php echo $product['productId']?></td>
            <td><?php echo $product['productName']?></td>
            <td><?php echo $product['productBrand']?></td>
            <td><?php echo $product['productPrice'] ?></td>
            <td><?php echo $product['productImage'] ?></td>
        </tr>

    <button><a href="index.php?page=products&action=show-list">quay lại</a></button>
</table>
</body>
</html>

