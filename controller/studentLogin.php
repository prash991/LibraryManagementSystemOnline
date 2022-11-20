<?php 

?>

<html>
	<head>
		<style>
		body {
	
  
    background-image: url("http://www.tokkoro.com/picsup/1337522-cristiano-ronaldo.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center bottom;

    background-repeat: no-repeat;
    background-size: 1400px 700px;
}
</style>


		<title></title>
		<link rel="stylesheet" type="text/css" href="../css/inputs.css">
		<link rel="stylesheet" type="text/css" href="../css/form.css">
		<link rel="stylesheet" type="text/css" href="../css/title.css">
	</head>
	<body>
		<div class="title">Student Login</div>
		
			<form class="loginForm">
				<div class="formInput">
					<input type="text" name="username" required autofocus placeholder="Username" >
				</div>
				<div class="formInput">
					<input type="password" name="pwd" required autofocus placeholder="password" >
				</div>
					<input type="submit" name="studentLoginBtn" value="Log In" class="btnLogin">
					<br >
					<a class="forgetPwd" href="home.php?activity=forgetpwd&r=user">Forget Password?</a>
			</form>

			
	    </div>
	</body>
</html>
