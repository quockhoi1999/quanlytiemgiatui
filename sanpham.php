<?php 
include ("header.php");
?>
<div class="container"> 
    <h1> Quản lý Sản Phẩm</h1>
    <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Hình Ảnh</th>
                <th>Thể Loại</th>
                <th>Giá Tiền</th>
                <th>Hành Động</th>
            </tr>
        </thread>
    <?php
    $s=0;
    $conn = mysqli_connect('localhost','root',"",'quanlytiemgiatui') or die ('không thể kết nối sql');
    $sql = " select * from sanpham";
    $result=mysqli_query($conn,$sql) or die ("câu lệnh truy vấn sai");
         while($row = mysqli_fetch_assoc($result))
   {?>
   <tr>
        <td> <?php echo $s+=1; ?></td>
       <td><?php echo $row['Masp'];?> </td>
       <td><?php echo $row['Tensp'];?></td>
       <td><img src="image/<?php echo $row['Hinhanh'];?>" width="50" height="50"></td>
       <td><?php echo $row['Loai'];?></td>
       <td><?php echo $row['Giatien'];?></td>
      
       
       <td><a href="xoasp.php?x=<?php echo $row['Masp']?>"><i class='fas fa-trash' style='font-size:25px;color:red'></i></a>
       <a href="suasp.php?y=<?php echo $row['Masp']?>"><i class='fas fa-edit' style='font-size:25px;color:blue'></i></td>
    </tr>
   <?php
   }
   ?>
   </table>
    <a href="addsp.php">Thêm Mới Sản Phẩm</a>
    </div>
</div>
  
