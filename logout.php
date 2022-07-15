<?php 
	session_start();
	unset($_SESSION['Taikhoan']);
	echo "<script> alert('Bạn đã đăng xuất khỏi hệ thống');</script>";
	echo "<script> window.location = 'http://localhost:8080/thietkeweb/Dangnhap.php';</script>";
 ?>