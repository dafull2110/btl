<?php
	$sql_pro="Select * from products inner join brands on products.brand_id=brands.brand_id where products.id_loaisp ='$_GET[id]'order by prd_id DESC "; 
	$query_pro =mysqli_query($mysqli,$sql_pro);
	$row_title =mysqli_fetch_array($query_pro);
?>
<h3>Danh muc san pham</h3>
<div class="prd">
	<ul class="product_list">
		<?php 
			$i=0;
			while($row_title = mysqli_fetch_array($query_pro)){	
			$i++;
			?>	
			<li class="product">
				<a href=""><img class="img_prd" src="images/<?php echo $row_title['image'] ?>"/img>
					<p class="title_product">Tên sản phẩm : <?php echo $row_title['prd_name'] ?></p>
					<p class="price_product">Giá : <?php echo number_format($row_title['price'],0,',','.').'vnđ'  ?></p>
					<p class="brand_product">Thương hiệu : <?php echo $row_title['brand_name'] ?></p>
				</a>

			</li>
		<?php
		}
		?>
	</ul>	
</div>
