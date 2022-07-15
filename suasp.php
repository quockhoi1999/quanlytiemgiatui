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
    THÔNG TIN SẢN PHẨM
    <?php
    $masp=$_GET['y'];
    
    $conn = mysqli_connect('localhost','root',"",'quanlytiemgiatui') or die ('không thể kết nối sql');
    $sql = " select * from sanpham where Masp='$masp'";
    $ketqua=mysqli_query($conn, $sql) or die("Câu truy vấn sai!");
    while($row = mysqli_fetch_assoc($ketqua)){
        $tensp=$row['Tensp'];
        $file=$row['Hinhanh'];
        $theloai=$row['Loai'];
        $giatien=$row['Giatien'];
        
       
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Mã Sản Phẩm</td>
                <td><input type="text"name='masp' readonly='true' value="<?php echo $masp?>"></td>
            </tr>
            <tr>
                <td>Tên Sản Phẩm </td>
                <td><input type="text"name='Tensp' value="<?php echo $tensp?>"></td>
            </tr>
            <tr>
                <td>Hình Ảnh </td>
                <img src="image/ <?php echo $file ?>" width="100" heigh="100">
                <td><input type="file"name='img' value="<?php echo $file?>"></td>
            </tr>
                <td>Thể Loại </td>
                <td><input type="text"name='theloai' value="<?php echo $theloai?>"></td>
            </tr>
            <tr>
                <td>Giá Tiền </td>
                <td><input type="text"name='giatien' value="<?php echo $giatien?>"></td>
            </tr>
            <tr>
                <td> <input type="submit" name ="btn"value="Cập Nhật"></td>
            </tr>
        </table>
        <?php
        if(isset($_POST['btn'])){
            $tensp=$_POST['Tensp'];
            $file=$_FILES['img'];
            $file_name=$file['name'];
            $theloai=$_POST['theloai'];
            $giatien=$_POST['giatien']; 
            if($file_name=="")
            $sql="UPDATE sanpham SET Tensp='$tensp',Loai='$theloai',Giatien='$giatien' WHERE Masp='$masp'";
            else
            $sql="UPDATE sanpham SET Tensp='$tensp',Hinhanh='$file_name',Loai='$theloai',Giatien='$giatien' WHERE Masp='$masp'";
            $ketqua=mysqli_query($conn, $sql)or die ("câu lệnh truy vấn sai");
            if($ketqua==true)
            {if($file_name=!"")
                move_uploaded_file($file['tmp_name'],'image/'.$file_name);
                echo "Cập Nhật Thành Công ! Hãy vào <a href='sanpham.php'>Danh sách sách </a> để xem lại";
            }

        }
        ?>
    </form>
</body>
</html>
