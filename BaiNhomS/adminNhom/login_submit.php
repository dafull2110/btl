<?php
	session_start();
	include ("config/config.php");
	if( isset($_POST['submit']) && $_POST['username'] !='' && $_POST['password'] !=''){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$password = md5($password);
		$sql = "SELECT * FROM `tbl_admin` WHERE `username`='$username' AND `password`='$password' ";
		$user = mysqli_query($mysqli,$sql);
		if( mysqli_num_rows($user) >0){
			$_SESSION['user'] = $username;
			header("Location: index.php");
		}else{
			echo "ban da nhap sai";
		}
	}else{
		header("Location : login.php");
	}
?>