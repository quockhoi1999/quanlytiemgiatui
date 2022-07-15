<?php require 'header.php';?>
<title>Quản lý Tiệm Giặt Ủi<img src="" alt="" sizes="" srcset=""></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesom...in.css">
    <form action="" method="post">
        <h1>Thêm Mới Nhân Viên</h1>
        <label for=""> Mã Nhân Viên</label>
        <input type="text"name='ma'class="form-control"  value="">
        <label for=""> Họ Tên</label>
        <input type="text"name='ten'class="form-control"  value="">
        <label for="">Địa Chỉ</label>
        <input type="text"name='diachi'class="form-control"  value="">
        <label for="">Ngày Sinh</label>
        <input type="date"name='ngaysinh'class="form-control"  value="">
        <label for="">Điện Thoại</label>
        <input type="text"name='dienthoai'class="form-control"  value="">
        <input type="submit" name ="btn" class="btn btn-primary"value="Thêm mới">
    </form>
    <?php
    if(isset($_POST['btn'])){
        $ma=$_POST['ma'];
        $ten=$_POST['ten'];
        $dc=$_POST['diachi'];
        $ns=$_POST['ngaysinh'];
        $dt=$_POST['dienthoai'];
        $conn = mysqli_connect('localhost','root',"",'quanlytiemgiatui') or die ('không thể kết nối sql');
        $kq = " select * from nhanvien where MaNV='$ma'";
        $kq_con=mysqli_query($conn,$kq);
        $dem=mysqli_num_rows($kq_con);
        if($dem > 0){
            echo "Mã Nhân Viên Đã Tồn Tại";
        }
        else{
            $sql = "INSERT INTO nhanvien VALUES('$ma','$ten','$dc','$ns','$dt')";
            $result=mysqli_query($conn,$sql);
        if($result == true){
            echo "Thêm Mới Nhân Viên Thành Công !Hãy vào <a href='nhanvien.php'>Danh sách nhân viên </a> để xem lại";
        }
        }
    }
    ?>
