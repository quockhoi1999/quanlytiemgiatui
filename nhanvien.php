<?php 
include ("header.php");
?>
<div class="container"> 
    <h1> Quản lý Nhân Viên</h1>
    <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                
                <th>Mã Nhân Viên</th>
                <th>Họ Tên</th>
                <th>Địa Chỉ</th>
                <th>Ngày Sinh</th>
                <th>Điện thoại</th>
                <th>Hành Động</th>
            </tr>
        </thread>
    <?php
    $s=0;
    $conn = mysqli_connect('localhost','root',"",'quanlytiemgiatui') or die ('không thể kết nối sql');
    $sql = " select * from nhanvien";
    $result=mysqli_query($conn,$sql) or die ("câu lệnh truy vấn sai");
         while($row = mysqli_fetch_assoc($result))
   {?>
   <tr>
        
       <td><?php echo $row['MaNV'] ?> </td>
       <td><?php echo $row['hoten'];?></td>
       <td><?php echo $row['diachi'];?></td>
       <td><?php echo $row['ngaysinh'];?></td>
       <td><?php echo $row['SDT'];?></td>
       
       <td><a href="xoanv.php?x=<?php echo $row['MaNV']?>"><i class='fas fa-trash' style='font-size:25px;color:red'></i></a>
       <a href="suanv.php?y=<?php echo $row['MaNV']?>"><i class='fas fa-edit' style='font-size:25px;color:blue'></i></td>
    </tr>
   <?php
   }
   ?>
   </table>
    <a href="addnv.php">Thêm Mới Nhân Viên</a>
    </div>
</div>
  
 