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
    THÔNG TIN NHÂN VIÊN
    <?php
    $user=$_GET['y'];
    
    $conn = mysqli_connect('localhost','root',"",'quanlytiemgiatui') or die ('không thể kết nối sql');
    $sql = " select * from nhanvien where MaNV='$user'";
    $ketqua=mysqli_query($conn, $sql) or die("Câu truy vấn sai!");
    while($row = mysqli_fetch_assoc($ketqua)){
        $hoten=$row['hoten'];
        $diachi=$row['diachi'];
        $ngaysinh=$row['ngaysinh'];
        $dienthoai=$row['SDT'];
        
       
    }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Mã Nhân Viên</td>
                <td><input type="text"name='MaNV' readonly='true' value="<?php echo $user?>"></td>
            </tr>
            <tr>
                <td>Họ Tên </td>
                <td><input type="text"name='hoten' value="<?php echo $hoten?>"></td>
            </tr>
            <tr>
                <td>Địa Chỉ </td>
                <td><input type="text"name='diachi' value="<?php echo $diachi?>"></td>
            </tr>
                <td>Ngày Sinh </td>
                <td><input type="date"name='ngaysinh' value="<?php echo $ngaysinh?>"></td>
            </tr>
            <tr>
                <td>Điện thoại </td>
                <td><input type="text"name='dienthoai' value="<?php echo $dienthoai?>"></td>
            </tr>
            <tr>
                <td> <input type="submit" name ="btn"value="Cập Nhật"></td>
            </tr>
        </table>
        <?php
        if(isset($_POST['btn'])){
            $hoten=$_POST['hoten'];
            $diachi=$_POST['diachi'];
            $ngaysinh=$_POST['ngaysinh'];
            $dienthoai=$_POST['dienthoai'];
            
            
            $sql="UPDATE nhanvien SET `hoten`='$hoten',`diachi`='$diachi',,`ngaysinh`='$ngaysinh',`dienthoai`='$dienthoai' WHERE MaNV='$user'";
            $ketqua=mysqli_query($conn, $sql)or die ("câu lệnh truy vấn sai");
            if($ketqua==true)
            {
                echo "Cập Nhật Nhân Viên Thành Công ! Hãy vào <a href='nhanvien.php'>Danh sách nhân viên </a> để xem lại";
            }
         

        }
        ?>
    </form>
</body>
</html>
