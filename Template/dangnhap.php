<?php
session_start();
error_reporting(E_ALL ^ E_DEPRECATED);
require_once './model/connect.php';
$prd = 0;
if (isset($_SESSION['cart'])) {
    $prd = count($_SESSION['cart']);
}
if (isset($_GET['error'])) {
    $error = 'Vui lòng kiểm tra lại tên đăng nhập và mật khẩu của bạn!';
} else
    $error = '';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f3f3f3;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        width: 300px;
    }

    .login-container label {
        font-weight: bold;
        display: block;
        margin-bottom: 6px;
    }

    .login-container input {
        width: 90%;
        padding: 10px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    .login-container button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .login-container button:hover {
        background-color: #0056b3;
    }

    .login-container div {
        margin-bottom: 12px;
    }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Đăng nhập</h2>
        <form method="POST" action="datadangnhap.php" name="myForm">
            <div>
                <label for="username">Tên Đăng Nhập</label>
                <input type="text" name="username" placeholder="Tên Đăng Nhập">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Password">
            </div>
            <input type="submit" name="submit" value="Đăng nhập">
        </form>
        <p>Nếu bạn chưa có tài khoản. Vui lòng <a href="dangky.php">Đăng ký</a></p>
    </div>
</body>

</html>