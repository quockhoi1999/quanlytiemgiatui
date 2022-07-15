<?php
$user=$_GET['x'];
$ketnoi=mysqli_connect("localhost","root","","quanlytiemgiatui") or die ("Kết nối thất bại");
$sql = "delete from khachhang where MaKH='$user'";
$ketqua=mysqli_query($ketnoi,$sql) or die ("Lỗi truy vấn");
if($ketqua==true){
    header ('Location:http://localhost:8080/thietkeweb/khachhang.php');
}
?>