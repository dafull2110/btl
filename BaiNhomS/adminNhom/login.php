<!DOCTYPE html>
<html>
    <head>
        <title>Sign in</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    </head>
    <body>
    	<form action="login_submit.php" method="POST">
			<div class="login">
	            <h2>Member Login</h2>
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
	            <div class="check">
	                <input type="checkbox">
	                Remember password
	            </div>
	            <button type="submit" name="submit">Login</button>
	            <br>
	            <a href="register.php" class="signup">
	                Sign up
	            </a>
	            <a href="forgot.php" class="forgot">
	                Forgot password 
	            </a>
	        </div>    		
    	</form>      
    </body>
</html>