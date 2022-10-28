<?php
	$sql="Select * from tbl_loaisanpham"; 
	$query_danhmuc =mysqli_query($mysqli,$sql);
?>

<div class="menu-bar">
	
	<div class ="menu-bar-content">
		<ul>
			<li><a href="home_page.php"><i class="fas fa-mobile-alt"></i>Trang chủ</a>
			<?php
			$i=0;
			while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				$i++;
			?>			
				<li><a href="home_page.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_loaisp'] ?>"><?php echo $row_danhmuc['tenloaisp'] ?></a></li>
			<?php
			}
			?>
			</li>
		</ul>				
	</div>	
</div>