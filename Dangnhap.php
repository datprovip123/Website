<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: url("image/5.jpg");
			background-size: cover;
			background-position: center;
			font-family: Helvetica;
		}
		.loginbox{
			width: 320px;
			height: 420px;
			background: #000;
			color: #fff;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 70px 30px;
		}
		.avatar{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: -50%;
			left: calc(50%-50px);
		}
		h1{
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
		}
		.loginbox p{
			margin: 0px;
			padding: 0px;
			font-weight: bold;
		}
		.loginbox input{
			width: 100%;
			margin-bottom: 20px;
		}
		.loginbox input[type="text"], input[type="password"]{
			border:none;
			border-bottom: 1px solid #fff;
			background: #000000;
			outline: none;
			height: 40px;
			color: #fff;
			font-size: 16px;
		}
		.loginbox input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background: #fb2525;
			color: #fff;
			font-size: 18px;
			border-radius: 20px;
			
		}
		.loginbox input[type="submit"]:hover{
			cursor: pointer;
			background: #ffc107;
			color: #000;
		}
		.loginbox a{
			text-decoration: none;
			font-size: 12px;
			line-height: 20px;
			color: darkgray;
		}
		.loginbox a:hover{
			color: #ffc107;
		}
	</style>
</head>

<body>

	<form method = "post">
	<div class="loginbox">
    <img src="image/logo4.png" class="avatar">
        <h1>Login Here</h1>
        <form >
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login" value="login">
            
            <a href="dang ky.php">Don't have an account?</a>
        </form>
     
    </div>
	</form>
	<?php
	$connect = mysqli_connect('localhost','root','','mydtb');
	if(!$connect){
		echo "ket noi that bai";
	}
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "select * from users where username = '$username' and password ='$password'";
		$result = mysqli_query($connect,$sql);
		$check_login = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
		if($check_login == 0){
			echo"<script>alert('password or username incorrect, please try again!')</script>";
			exit();
		}
		if($check_login > 0){
			$_SESSION['UserID'] = $row ['UserID'];
			$_SESSION['username'] = $username;
			echo"<script>alert('You have logged in successfully!')</script>";
			echo"<script>window.open('Admin/admin1.php','_self')</script>";
	}  
	}
	
	?>
	
	
	
	
	
	
	
	
	
</body>
</html>
