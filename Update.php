<?php 
include ("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    THÔNG TIN NGƯỜI DÙNG
    <?php
    $user=$_GET['y'];
    
    $conn = mysqli_connect('localhost','root',"",'quanlytiemgiatui') or die ('không thể kết nối sql');
    $sql = " select * from khachhang where MaKH='$user'";
    $ketqua=mysqli_query($conn, $sql) or die("Câu truy vấn sai!");
    while($row = mysqli_fetch_assoc($ketqua)){
        $hoten=$row['hoten'];
        $diachi=$row['diachi'];
        $dienthoai=$row['dienthoai'];
        $email=$row['email'];
       
    }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Mã Khách Hàng</td>
                <td><input type="text"name='MaKH' readonly='true' value="<?php echo $user?>"></td>
            </tr>
            <tr>
                <td>Họ Tên </td>
                <td><input type="text"name='hoten' value="<?php echo $hoten?>"></td>
            </tr>
            <tr>
                <td>Địa Chỉ </td>
                <td><input type="text"name='diachi' value="<?php echo $diachi?>"></td>
            </tr>
            <tr>
                <td>Điện thoại </td>
                <td><input type="text"name='dienthoai' value="<?php echo $dienthoai?>"></td>
            </tr>
            <tr>
                <td>Email </td>
                <td><input type="text"name='email' value="<?php echo $email?>"></td>
            </tr>
            <tr>
                <td> <input type="submit" name ="btn"value="Cập Nhật"></td>
            </tr>
        </table>
        <?php
        if(isset($_POST['btn'])){
            $hoten=$_POST['hoten'];
            $diachi=$_POST['diachi'];
            $dienthoai=$_POST['dienthoai'];
            $email=$_POST['email'];
            
            $sql="UPDATE khachhang SET `hoten`='$hoten',`diachi`='$diachi',`dienthoai`='$dienthoai',`email`='$email' WHERE MaKH='$user'";
            $ketqua=mysqli_query($conn, $sql)or die ("câu lệnh truy vấn sai");
            if($ketqua==true)
            {
                echo "Cập Nhật Khách Hàng Thành Công ! Hãy vào <a href='khachhang.php'>Danh sách khách hàng </a> để xem lại";
            }
         

        }
        ?>
    </form>
</body>
</html>
<?php
include("footer.php");

?>
