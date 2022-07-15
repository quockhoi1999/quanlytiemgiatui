<?php
$taikhoan=$_GET['x'];
$ketnoi=mysqli_connect("localhost","root","","quanlytiemgiatui") or die ("Kết nối thất bại");
$sql = "delete from user where Taikhoan='$taikhoan'";
$ketqua=mysqli_query($ketnoi,$sql) or die ("Lỗi truy vấn");
if($ketqua==true){
    header ('Location:http://localhost:8080/thietkeweb/user.php');
}
?>