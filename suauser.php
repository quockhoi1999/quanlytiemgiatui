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
    $taikhoan=$_GET['y'];
    
    $conn = mysqli_connect('localhost','root',"",'quanlytiemgiatui') or die ('không thể kết nối sql');
    $sql = " select * from user where Taikhoan='$taikhoan'";
    $ketqua=mysqli_query($conn, $sql) or die("Câu truy vấn sai!");
    while($row = mysqli_fetch_assoc($ketqua)){
        $matkhau=$row['Matkhau'];
        $hoten=$row['Hoten'];
        $ghichu=$row['Ghichu'];
    }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Tên Tài Khoản</td>
                <td><input type="text"name='taikhoan' readonly='true' value="<?php echo $taikhoan?>"></td>
            </tr>
            <tr>
                <td>Mật Khẩu </td>
                <td><input type="text"name='matkhau' value="<?php echo $matkhau?>"></td>
            </tr>
            <tr>
                <td>Họ Tên</td>
                <td><input type="text"name='hoten' value="<?php echo $hoten?>"></td>
            </tr>
                <td>Ghi Chú </td>
                <td><input type="Text"name='ghichu' value="<?php echo $ghichu?>"></td>
            </tr>
            <tr>
                <td> <input type="submit" name ="btn"value="Cập Nhật"></td>
            </tr>
        </table>
        <?php
        if(isset($_POST['btn'])){
            $taikhoan=$_POST['taikhoan'];
            $matkhau=$_POST['matkhau'];
            $hoten=$_POST['hoten'];
            $ghichu=$_POST['ghichu'];
           
            $sql="UPDATE user SET `taikhoan`='$taikhoan' `matkhau`='$matkhau',`hoten`='$hoten',,`Ghichu`='$ghichu' WHERE Taikhoan='$taikhoan'";
            $ketqua=mysqli_query($conn,$sql)or die ("câu lệnh truy vấn sai");
            if($ketqua==true)
            {
                echo "Cập Nhật Người Dùng Thành Công ! Hãy vào <a href='user.php'>Danh sách người dùng </a> để xem lại";
            }
         

        }
        ?>
    </form>
</body>
</html>
