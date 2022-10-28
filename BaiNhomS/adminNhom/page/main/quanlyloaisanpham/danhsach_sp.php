<?php
	$sql="Select * from tbl_loaisanpham"; 
	$query =mysqli_query($mysqli,$sql);
?>
<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			<h2>Danh mục</h2>
		</div>
		<div class ="card-body">
			<table class="table">
				<thead class ="thead-dark">
					<tr>
						<th>#</th>
						<th>Tên danh mục</th>
						
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
								<td><?php echo $row['tenloaisp']; ?></td>
						
								
								<td>
									<a href="page/main/quanlyloaisanpham/index_loaisanpham.php?page_layout=sua&id=<?php echo $row['id_loaisp']; ?>">Sửa</a> 
								</td>
								<td>
									<a onclick = "return Del('<?php echo $row['tenloaisp']; ?>')" href="page/main/quanlyloaisanpham/index_loaisanpham.php?page_layout=xoa&id=<?php echo $row['id_loaisp']; ?>">Xóa</a> 
								</td>
								
							</tr>
						<?php } ?>
					
				</tbody>
			</table>
			<a class="btn btn-primary" href ="page/main/quanlyloaisanpham/index_loaisanpham.php?page_layout=them">Thêm mới</a>
			
			<a class="btn btn-primary" href ="../../../index.php?quanly=loaisanpham&id1">Thoát</a>
		</div>
		
	</div>
</div>
<script>
	function Del(name){
		return confirm("bạn có chắc muốn xóa sản phẩm này: "+ name+ " ?");
	}
</script>