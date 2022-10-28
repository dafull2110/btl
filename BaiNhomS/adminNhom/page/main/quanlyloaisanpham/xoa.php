<?php
$id = $_GET['id'];
$sql = "delete from tbl_loaisanpham where id_loaisp = $id";
$query = mysqli_query($mysqli,$sql);
header('location: index_loaisanpham.php?page_layout=danhsach_sp')
?>