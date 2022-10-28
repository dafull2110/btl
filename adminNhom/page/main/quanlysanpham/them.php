<?php
	$sql_brand = "SELECT * From brands";
	$query_brand = mysqli_query($mysqli,$sql_brand);

	$sql_loaisp = "SELECT * From tbl_loaisanpham";
	$query_loaisp = mysqli_query($mysqli,$sql_loaisp);
	if(isset($_POST['sbm'])){
		$prd_name = $_POST['prd_name'];
		
		$image = $_FILES['image']['name'];
		$image_tmp = $_FILES['image']['tmp_name'];
		
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$description = $_POST['description'];
		$brand_id = $_POST['brand_id'];
		$id_loaisp = $_POST['id_loaisp'];
		$sql ="insert into products(prd_name,image,price,quantity,description,brand_id, id_loaisp )
		Values ('$prd_name','$image', $price,  $quantity, '$description', $brand_id, $id_loaisp)";
		$query = mysqli_query($mysqli, $sql);
		move_uploaded_file($image_tmp, 'img/'.$image);
		echo "ok";
		header('location: index_sanpham.php?page_layout=danhsach');
	}
?>
<div class="container-fluid">
	<div class="card">
		<div clas="card-header">
			<h2>Thêm sản phẩm</h2>
		</div>
		<div class="card-body">
			<form method="POST" enctype="multipart/form-data">
				<div class="form-group">
					<label for="">Tên sản phẩm</label>
					<input type="text" name="prd_name"  class="form-control" required>
				</div>
				
				<div class="form-group">
					<label for="">Ảnh sản phẩm</label> 
					<input type="file" name="image">
				</div>
				
				<div class="form-group">
					<label for="">Giá sản phẩm</label>
					<input type="number" name="price"  class="form-control" required>
				</div>
				
				<div class="form-group">
					<label for="">Số lượng sản phẩm</label>
					<input type="number" name="quantity"  class="form-control" required>
				</div>
				
				<div class="form-group">
					<label for="">Mô tả sản phẩm</label>
					<input type="text" name="description"  class="form-control" required>
				</div>
				
				<div class="form-group">
					 <label for = "">Thương hiệu </label>
					<select class="form-control" name="brand_id">
						<?php
							while($row_brand = mysqli_fetch_assoc($query_brand)){?>
								<option value = "<?php echo $row_brand['brand_id'];?>"><?php echo $row_brand['brand_name'];?></option>
							<?php } ?>
					</select>
				</div>
				<div class="form-group">
					 <label for = "">Loại sản phẩm </label>
					<select class="form-control" name="id_loaisp">
							<?php
							while($row_loaisp = mysqli_fetch_assoc($query_loaisp)){?>
								<option value = "<?php echo $row_loaisp['id_loaisp'];?>"><?php echo $row_loaisp['tenloaisp'];?></option>
							<?php } ?>
					</select>
				</div>
				
				<button name="sbm" class="btn btn-success" type="submit">Thêm</button>
			</form>
		</div>
	</div>
</div>
