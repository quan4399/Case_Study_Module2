<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang người dùng</title>
</head>
<body>
<h3>Quản lý sản phẩm</h3>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Mã người dùng</th>
        <th scope="col">Tên người dùng</th>
        <th scope="col">Email</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Địa chỉ</th>
        <th scope="col">Tên đăng nhập</th>
        <th scope="col">Mật khẩu</th>
        <th scope="col">Quyền truy cập</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $index => $user): ?>
        <tr style="text-align: center">
            <th scope="row"><?php echo $index + 1 ?></th>
            <td><?php echo $user['userId'] ?></td>
            <td><?php echo $user['userName'] ?></td>
            <td><?php echo $user['userEmail'] ?></td>
            <td><?php echo $user['userPhone'] ?></td>
            <td><?php echo $user['userAddress'] ?></td>
            <td><?php echo $user['userAccount'] ?></td>
            <td><?php echo $user['userPassword'] ?></td>
            <td><?php echo $user['role'] ?></td>
            <td><a href="index.php?page=detail-user&id=<?php echo $user['userId'] ?>"><button type="button" class="btn btn-info text-white">Detail</button></a></td>
            <td><a onclick="confirm('are you sure delete this ?')" href="index.php?page=delete-user&id=<?php echo $user['userId'] ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>

