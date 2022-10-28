<div id="main">		
	<div class="maincontent">			
		<?php
			if(isset($_GET['quanly'])){
			$tam = $_GET['quanly'];
		}else{
			$tam ='';
		}if($tam=='danhmucsanpham'){
			include("main_than/danhmuc01.php");
		}else{
			include("main_than/index_ss.php");
		}
		?>
	</div>
</div>	