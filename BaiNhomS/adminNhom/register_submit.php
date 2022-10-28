<?php
	include("config/config.php");
	if(isset($_POST['submit']) && $_POST['username'] !='' && $_POST['password'] !='' && $_POST['repassword'] !=''){
		// thực hiện xử lý khi người dùng nhập đủ thông tin
		$username =$_POST['username'];
		$password = $_POST['password'];
		$repassword =$_POST['repassword'];
		$admin_status = 0;
		if($password != $repassword){
			header("Location: register.php");
		}
		$sql = "SELECT * FROM `tbl_admin` WHERE `username`='$username'";
		$old = mysqli_query($mysqli,$sql);
		$password =md5($password);
		if(mysqli_num_rows($old) > 0){
			header("Location: register.php");
		}
		$sql_them = "INSERT INTO `tbl_admin`(`id_admin`, `username`, `password`, `admin_status`) VALUES (NULL,'$username','$password','$admin_status')";
		mysqli_query($mysqli,$sql_them);
		header("Location: login.php");
	}else{
		header("Location: register.php");
	}
?>