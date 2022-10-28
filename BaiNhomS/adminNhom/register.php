<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng kí</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
</head>
<body>
	<form action="register_submit.php" method="POST">
		<div class="login">
	            <h2>Sign up</h2>
	            <br>
	            <div class="icon"> 
	                <i class="fas fa-user"></i>
	                <input type="text" placeholder="Username" name="username">
	            </div>
	            <br>
	            <div class="icon">
	                <i class="fas fa-lock"></i>
	                <input type="password" placeholder="Password" name="password">
	            </div>
	            <br>
				<br>
	            <div class="icon">
	                <i class="fas fa-lock"></i>
	                <input type="password" placeholder="Repassword" name="repassword">
	            </div>
	            <br>
	            <button type="submit" name="submit">Đăng kí</button>
	            <br>
	        </div>
	</form>
</body>
</html>