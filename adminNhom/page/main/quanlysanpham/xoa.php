<?php
$id = $_GET['id'];
$sql = "delete from products where prd_id = $id";
$query = mysqli_query($mysqli,$sql);
header('location: index_sanpham.php?page_layout=danhsach')
?>