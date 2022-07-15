<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tạo form </title>
<style>
* {
margin: 0;
padding: 0;
}
body {
background-image: url('https://img3.thuthuatphanmem.vn/uploads/2019/10/10/anh-background-dong-don-gian_032845592.gif');
background-size: cover;
background-position-y: -80px;
font-size: 16px;
}
.actionForm {
max-width: 600px;
margin: 0 auto;
display: block;
margin-top: 50px;
}
.actionForm input[type="text"],
.actionForm input[type="password"]
{
padding: 10px;
border: 1px solid #eee;
border-radius: 5px;
width: 100%;
}
.actionForm button[type="submit"] {
padding: 10px;
background: blue;
color: #fff;
border: 0;
outline: 0;
}
.h1{
    font-size: 25px;
    color: none;
    text-align: center;
    margin-bottom: 30px;
}
</style>

</head>

<body>

<form action="" method="post" class="actionForm">
<h1 class="h1" > ĐĂNG KÝ</h1>
<input type="text" placeholder="Tài Khoản" name="user"/><br><br>

<input type="password" placeholder="Mật khẩu" name="password"/><br><br>

<input type="password" placeholder="Nhập Lại Mật khẩu" name="password"/><br><br>

<input type="text" placeholder="Họ Tên" name="hoten"/><br><br>

<input type="text" placeholder="Ghi Chú" name="ghichu"/><br><br>

<input type="submit" class="form-submit" name ="btnd"  value="Đăng Ký">

</form>

<?php
    if(isset($_POST['btnd'])){
        $tk=$_POST['user'];
        $mk=$_POST['password'];
        $hoten=$_POST['hoten'];
        $ghichu=$_POST['ghichu'];
        $ketnoi=mysqli_connect('localhost','root',"",'quanlytiemgiatui') or die("Kết nối database không thành công");
        $sql = "SELECT * FROM user WHERE Taikhoan  = '$tk'";
        $result = mysqli_query($ketnoi, $sql) or die("Câu truy vấn sai!");
        if (!$tk || !$mk ){echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;}
        if(mysqli_num_rows($result) > 0){
            echo "Tài khoản đã tồn tại";
            exit ();}
        $sql = "INSERT INTO  user VALUES('$tk','$mk','$hoten','$ghichu')";
        $kq=mysqli_query($ketnoi,$sql);
        if($kq==true){
            echo "Đăng ký thành công ! Hãy vào trang <a href='http://localhost:8080/thietkeweb/Dangnhap.php'>Đăng Nhập</a>";
        }
        else
        echo "Đăng ký thất bại";
    }
    ?>

</body>

</html>