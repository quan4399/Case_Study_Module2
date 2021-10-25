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
<h3>Chi tiết người dùng</h3>
<table>
    <tr>
        <th>STT</th>
        <th>Mã người dùng</th>
        <th>Tên người dùng</th>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Tên đăng nhập</th>
        <th>Mật khẩu</th>
    </tr>

        <tr style="text-align: center">
            <td><?php echo $user['userId']?></td>
            <td><?php echo $user['userName']?></td>
            <td><?php echo $user['userEmail']?></td>
            <td><?php echo $user['userPhone'] ?></td>
            <td><?php echo $user['userAddress'] ?></td>
            <td><?php echo $user['userAccount'] ?></td>
            <td><?php echo $user['userPassword'] ?></td>
        </tr>
    <button><a href="index.php?page=show-list">quay lại</a></button>
</table>
</body>
</html>

