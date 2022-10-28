<?php
	
	if(isset($_POST['sbm'])){
		$tenloaisp = $_POST['tenloaisp'];
		$sql ="insert into tbl_loaisanpham(tenloaisp)
		Values ('$tenloaisp')";
		$query = mysqli_query($mysqli, $sql);
		header('location: index_loaisanpham.php?page_layout=danhsach_sp');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div clas="card-header">
			<h2>Thêm danh mục</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Tên danh mục</label>
					<input type="text" name="tenloaisp"  class="form-control" required>
				</div>
				<button name="sbm" class="btn btn-success" type="submit">Thêm</button>
			</form>
		</div>
	</div>
</div>
