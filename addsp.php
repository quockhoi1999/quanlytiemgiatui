<?php require 'header.php';?>
<title>Quản lý Tiệm Giặt Ủi<img src="" alt="" sizes="" srcset=""></title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesom...in.css">
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Thêm Mới Sản Phẩm</h1>
        <label for=""> Mã Sản Phẩm</label>
        <input type="text"name='masp'class="form-control"  value="">
        <label for=""> Tên Sản Phẩm</label>
        <input type="text"name='tensp'class="form-control"  value="">
        <label for="">Hình Ảnh</label>
        <input type="file"name='img'class="form-control"  value="">
        <label for="">Thể Loại</label>
        <input type="text"name='theloai'class="form-control"  value="">
        <label for="">Giá Tiền</label>
        <input type="text"name='giatien'class="form-control"  value="">
        <input type="submit" name ="btn" class="btn btn-primary"value="Thêm mới">
    </form>
    <?php
    if(isset($_POST['btn'])){
        $masp=$_POST['masp'];
        $tensp=$_POST['tensp'];
        $theloai=$_POST['theloai'];
        $giatien=$_POST['giatien'];
        $file=$_FILES['img'];
        $file_name=$file['name'];
        $conn = mysqli_connect('localhost','root',"",'quanlytiemgiatui') or die ('không thể kết nối sql');
        $kq = " select * from sanpham where Masp='$masp'";
        $kq_con=mysqli_query($conn,$kq);
        $dem=mysqli_num_rows($kq_con);
        if($dem > 0){
            echo "Mã Sản Phẩm Đã Tồn Tại";
        }
        else{
            $sql = "INSERT INTO sanpham VALUES('$masp','$tensp','$file_name','$theloai','$giatien')";
            $result=mysqli_query($conn,$sql);
                if($result == true){
                    if($file_name!=""){
                     move_uploaded_file($file['tmp_name'],'image/'.$file_name);
                    }
                 echo "Thêm Sản Phẩm Thành Công !Hãy vào <a href='sanpham.php'>Danh sách sản phẩm </a> để xem lại";
           }
   
    }}
    ?>
