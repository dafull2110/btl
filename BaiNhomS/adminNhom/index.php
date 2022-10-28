<?php
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location: login.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DashBoard - admin</title>
	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="wrapper">
		<?php
			include("config/config.php");
			include("page/menu.php");
			include("page/main.php");
			include("page/footer.php");
		?>
	</div>
</body>
</html>