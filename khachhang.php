
<?php 
include ("header.php");
?>
<div class="container"> 
    <h1> Quản lý Khách Hàng</h1>
    <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                
                <th>Mã Khách Hàng</th>
                <th>Họ Tên</th>
                <th>Địa Chỉ</th>
                <th>Điện thoại</th>
                <th>Email</th>
                <th>Hành Động</th>
            </tr>
        </thread>
    <?php
 
    $conn = mysqli_connect('localhost','root',"",'quanlytiemgiatui') or die ('không thể kết nối sql');
    $sql = " select * from khachhang";
    $result=mysqli_query($conn,$sql) or die ("câu lệnh truy vấn sai");
         while($row = mysqli_fetch_assoc($result))
   {?>
   <tr>
    
       <td><?php echo $row['MaKH'] ?> </td>
       <td><?php echo $row['hoten'];?></td>
       <td><?php echo $row['diachi'];?></td>
       <td><?php echo $row['dienthoai'];?></td>
       <td><?php echo $row['email'];?></td>
       
       <td><a href="Delete.php?x=<?php echo $row['MaKH']?>"><i class='fas fa-trash' style='font-size:25px;color:red'></i></a>
       <a href="Update.php?y=<?php echo $row['MaKH']?>"><i class='fas fa-edit' style='font-size:25px;color:blue'></i></td>
    </tr>
   <?php
   }
   ?>
   </table>
    <a href="addkh.php">Thêm Mới Khách Hàng</a>
    </div>
</div>
  
   
     