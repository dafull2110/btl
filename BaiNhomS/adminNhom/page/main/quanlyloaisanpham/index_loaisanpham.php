<?php 
	require_once'config.php'
?>
<!doctype html>
<html><head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title>bai tap lon</title>
</head>

<body>
	<?php 
		if(isset($_GET['page_layout'])){
			switch($_GET['page_layout']){
				
				case'danhsach':
					require_once  'danhsach.php';
					break;
				case'them':
					require_once  'them.php';
					break;
				case'sua':
					require_once  'sua.php';
					break;
				case'xoa':
					require_once  'xoa.php';
					break;
				default:
					require_once  'danhsach_sp.php';
					break;
			}
		}else{
				require_once  'danhsach_sp.php';
			}
		
	?>
</body>
</html>