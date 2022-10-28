<div class="clear"></div>
<div id="main">
			<?php
				include("sidebar/sidebar.php");
			?>

			<div class="maincontent">			
				<?php
					if(isset($_GET['quanly'])){
						$tam = $_GET['quanly'];
					}else{
						$tam ='';
					}if($tam=='loaisanpham'){
						include("main/quanlyloaisanpham/index_loaisanpham.php");
					}elseif ($tam=='sanpham') {
						include("main/quanlysanpham/index_sanpham.php");
					}else{
						include("page/dashboard.php");
					}
				?>
			</div>
</div>	