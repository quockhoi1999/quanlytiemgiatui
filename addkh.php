<?php require 'header.php';?>
<title>Quản lý Tiệm Giặt Ủi<img src="" alt="" sizes="" srcset=""></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesom...in.css">
    <form action="" method="post">
        <h1>Thêm Mới Khách Hàng</h1>
        <label for=""> Mã Khách Hàng</label>
        <input type="text"name='ma'class="form-control"  value="">
        <label for=""> Họ Tên</label>
        <input type="text"name='ten'class="form-control"  value="">
        <label for="">Địa Chỉ</label>
        <input type="text"name='diachi'class="form-control"  value="">
        <label for="">Điện Thoại</label>
        <input type="text"name='dienthoai'class="form-control"  value="">
        <label for="">Email</label>
        <input type="text"name='email'class="form-control"  value=""><br>
        <input type="submit" name ="btn" class="btn btn-primary"value="Thêm mới">
    </form>
    <?php
    if(isset($_POST['btn'])){
        $ma=$_POST['ma'];
        $ten=$_POST['ten'];
        $dc=$_POST['diachi'];
        $dt=$_POST['dienthoai'];
        $email=$_POST['email'];
        $conn = mysqli_connect('localhost','root',"",'quanlytiemgiatui') or die ('không thể kết nối sql');
        $kq = " select * from khachhang where MaKH='$ma'";
        $kq_con=mysqli_query($conn,$kq);
        $dem=mysqli_num_rows($kq_con);
        if($dem > 0){
            echo "Mã Khách Hàng Đã Tồn Tại";
        }
        else{
            $sql = "INSERT INTO khachhang VALUES('$ma','$ten','$dc','$dt','$email')";
            $result=mysqli_query($conn,$sql);
        if($result == true){
            echo "Thêm Mới Thành Công !Hãy vào <a href='khachhang.php'>Danh sách khách hàng </a> để xem lại";
        }
        }
    }
    ?>
    