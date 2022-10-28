<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>https://fptshop.com.vn/</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

	<link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/FPT-Menu.css">
	<link rel="stylesheet" type="text/css" href="css/DienThoaiNoiBat">
	<link rel="stylesheet" type="text/css" href="css/QuangCao.css">
	<link rel="stylesheet" type="text/css" href="css/Menu.css">
	<link rel="stylesheet" type="text/css" href="css/KhuyenMaiHot.css">
	<link rel="stylesheet" type="text/css" href="css/DienThoaiNoiBat.css">
	<link rel="stylesheet" type="text/css" href="css/LapTopBanChay.css">
	<link rel="stylesheet" type="text/css" href="css/TabletNoiBat.css">
	<link rel="stylesheet" type="text/css" href="css/PhuKienHot.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/danhmuc.css">

	<link rel="stylesheet" href="js/change.js">
</head>
<body>
	<div class="wrapper">
	<?php
		include("adminNhom/config/config.php");
		// include("page/header.php");
		include("page/menu.php");
		include("page/main.php");
		include("page/footer.php");
	?>

	</div>	
</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
        <script>
            $(()=>{
                $('#button-right').click(function(){
                    changItem('next');
                })
                $('#button-left').click(function(){
                    changItem('back');
                })
            })
            function changItem(type){
                let imgSelectVisible = $('img.slide-item:visible');
                let imgVisible = parseInt(imgSelectVisible.attr('number'));
                let eqNumber = type === 'next' ? imgVisible + 1 : imgVisible - 1;
                
                
                if(eqNumber >= $('.slide-item').length){
                    eqNumber = 0;
                }
                $('img.slide-item').eq(eqNumber).fadeIn();

                imgSelectVisible.fadeOut();
            }
            setInterval(() => {
               changItem('next'); 
            }, 5000);
        </script>