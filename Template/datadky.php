<?php
require_once './model/connect.php';
error_reporting(E_ALL); // Enable all error reporting for debugging purposes

if (isset($_POST['submit'])) {
  $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
  $username = isset($_POST['username']) ? $_POST['username'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  $address = isset($_POST['address']) ? $_POST['address'] : '';
  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';




  $sql = "INSERT INTO users (fullname, username, password, email, phone, address, role)
       VALUES ('$fullname', '$username', md5('$password'), '$email', '$phone', '$address', 1)";

  $res = mysqli_query($conn, $sql);

  if ($res) {
    echo "<script>alert('Đăng ký thành công');</script>";
    header("location: dangnhap.php");
    exit();
  } else {
    echo "<script>alert('Lỗi không thể đăng ký');</script>";
    exit();
  }
}
