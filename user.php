<?php 
include ("header.php");
?>
<div class="container"> 
    <h1> Quản lý Người Dùng</h1>
    <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr> 
                <th>Tài Khoản</th>
                <th>Mật Khẩu</th>
                <th>Họ Tên</th>
                <th>Ghi Chú</th>
                <td>Thao Tác</td>
            </tr>
        </thread>
    <?php
  
    $conn = mysqli_connect('localhost','root',"",'quanlytiemgiatui') or die ('không thể kết nối sql');
    $sql = " select * from user";
    $result=mysqli_query($conn,$sql) or die ("câu lệnh truy vấn sai");
         while($row = mysqli_fetch_assoc($result))
   {?>
   <tr>
        
       <td><?php echo $row['Taikhoan'] ?> </td>
       <td><?php echo $row['Matkhau'];?></td>
       <td><?php echo $row['Hoten'];?></td>
       <td><?php echo $row['Ghichu'];?></td>
       <td><a href="xoauser.php?x=<?php echo $row['Taikhoan']?>"><i class='fas fa-trash' style='font-size:25px;color:red'></i></a>
       <a href="suauser.php?y=<?php echo $row['Taikhoan']?>"><i class='fas fa-edit' style='font-size:25px;color:blue'></i></td>
    </tr>
   <?php
   }
   ?>
   </table>
    <a href="adduser.php">Thêm Mới Người Dùng</a>
    </div>
</div>
