<?php
	$sql="Select * from products 
	inner join brands on products.brand_id=brands.brand_id 
	inner join tbl_loaisanpham on products.id_loaisp=tbl_loaisanpham.id_loaisp";
	$query =mysqli_query($mysqli,$sql);
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Danh sách sản phẩm</h2>
		</div>
		<div class ="card-body">
			<table class="table">
				<thead class ="thead-dark">
					<tr>
						<th>#</th>
						<th>Tên sản phẩm</th>
						<th>Ảnh sản phẩm</th>
						<th>Giá sản phẩm</th>
						<th>Số lượng sản phẩm</th>
						<th>mô tả</th>
						<th>Thương hiệu</th>
						<th>Loại sản phẩm</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$i=1;
						while($row =mysqli_fetch_assoc($query)){?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo $row['prd_name']; ?></td>
						
								<td>
									<img style="width: 30px;" src="img/<?php echo $row['image']; ?>">
									
								</td>
								
								<td><?php echo $row['price']; ?></td>
								<td><?php echo $row['quantity']; ?></td>
								<td><?php echo $row['description']; ?></td>
								<td><?php echo $row['brand_name']; ?></td>
								<td><?php echo $row['tenloaisp']; ?></td>
								<td>
									<a href="page/main/quanlysanpham/index_sanpham.php?page_layout=sua&id=<?php echo $row['prd_id']; ?>">Sửa</a> 
								</td>
								<td>
									<a onclick = "return Del('<?php echo $row['prd_name']; ?>')" href="page/main/quanlysanpham/index_sanpham.php?page_layout=xoa&id=<?php echo $row['prd_id']; ?>">Xóa</a> 
								</td>
								
							</tr>
						<?php } ?>
					
				</tbody>
			</table>
			<a class="btn btn-primary" href ="page/main/quanlysanpham/index_sanpham.php?page_layout=them">Thêm mới</a>
			
			<a class="btn btn-primary" href ="../../../index.php?quanly=sanpham">Thoát</a>
		</div>
		
	</div>
</div>
<script>
	function Del(name){
		return confirm("bạn có chắc muốn xóa sản phẩm này: "+ name+ " ?");
	}
</script>