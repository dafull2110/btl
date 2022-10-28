<?php
	$id= $_GET['id'];
	$sql_up = "select * from tbl_loaisanpham where id_loaisp = $id";
	$query_up = mysqli_query($mysqli,$sql_up);
	$row_up = mysqli_fetch_assoc($query_up);

	if(isset($_POST['sbm'])){
		$tenloaisp = $_POST['tenloaisp'];
		
		$sql ="update tbl_loaisanpham Set tenloaisp = '$tenloaisp' WHERE id_loaisp = $id";
		 
		$query = mysqli_query($mysqli, $sql);
		
		header('location: index_loaisanpham.php?page_layout=danhsach_sp');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div clas="card-header">
			<h2>Sửa sản phẩm</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				
				<div class="form-group">
					
					<label for="">Tên danh mục</label>
					<input type="text" name="tenloaisp"  class="form-control" required value="<?php echo $row_up['tenloaisp']; ?>">
				</div>
				
				<button name="sbm" class="btn btn-success" type="submit">Sửa</button>
			</form>
		</div>
	</div>
</div>
