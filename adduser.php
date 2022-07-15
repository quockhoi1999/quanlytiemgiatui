<?php require 'header.php';?>
<title>Quản lý Tiệm Giặt Ủi<img src="" alt="" sizes="" srcset=""></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesom...in.css">
    <form action="" method="post">
        <h1>Thêm Mới Người Dùng</h1>
        <label for=""> Tên Tài Khoản</label>
        <input type="text"name='taikhoan'class="form-control"  value="">
        <label for=""> Mật Khẩu</label>
        <input type="text"name='matkhau'class="form-control"  value="">
        <label for="">Họ Tên</label>
        <input type="text"name='hoten'class="form-control"  value="">
        <label for="">Ghi Chú</label>
        <input type="text"name='ghichu'class="form-control"  value="">
        <input type="submit" name ="btn" class="btn btn-primary"value="Thêm mới">
    </form>
    <?php
    if(isset($_POST['btn'])){
        $tk=$_POST['taikhoan'];
        $mk=$_POST['matkhau'];
        $hoten=$_POST['hoten'];
        $ghichu=$_POST['ghichu'];
        $conn = mysqli_connect('localhost','root',"",'quanlytiemgiatui') or die ('không thể kết nối sql');
        $kq = " select * from user where Taikhoan='$tk'";
        $kq_con=mysqli_query($conn,$kq);
        $dem=mysqli_num_rows($kq_con);
        if($dem > 0){
            echo "Mã Người Dùng Đã Tồn Tại";
        }
        else{
            $sql = "INSERT INTO user VALUES('$tk','$mk','$hoten','$ghichu')";
            $result=mysqli_query($conn,$sql);
        if($result == true){
            echo "Thêm Mới Người Dùng Thành Công !Hãy vào <a href='user.php'>Danh sách người dùng </a> để xem lại";
        }
        }
    }
    ?>
