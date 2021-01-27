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
			min-height: 1000px
		}
		.loginbox{
			width: 500px;
			height: 920px;
			background: #000;
			color: #fff;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 70px 30px;
			margin-top: 120px;
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
			font-size: 15px;
		}
		.loginbox input{
			width: 100%;
			margin-bottom: 15px;
		}
		.loginbox input[type="text"], input[type="password"]{
			border:none;
			border-bottom: 1px solid #fff;
			background: #000000;
			outline: none;
			height: 40px;
			color: #fff;
			font-size: 12px;
		}
		.loginbox input[type="submit"]{
			border: none;
			outline: none;
			height: 40px;
			background: #fb2525;
			color: #fff;
			font-size: 15px;
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
<!--
	<form method="post" enctype="multipart/form-data">
		<h1>Register</h1>
		<tr><td>Already have account?</td><td><a href="Dangnhap.php">Login Now</a></td></tr>
		<tr>
	<table >
		<tr>
		<td><label>User ID</label></td>
		<td><input type="text" name="userid" required placeholder="userid"></td>
		</tr>
		<tr>
		<td><label>Username</label></td>
		<td><input type="text" name="username" required placeholder="username"></td>
		</tr>
		<tr>
		<td><label>Date of birth:</label></td>
		<td><input type="date" name="date"></td>
		</tr>
		<tr>
		<td><label>Email:</label></td>
		<td><input type="text" name="email" required placeholder="email"></td>
		</tr>
		<tr>
			<td><label>Password:</label></td>
		<td><input type="password" name="password" required placeholder="password"></td>
		</tr>
		<tr>
		<td><label>Confirm password:</label></td>
		<td><input type="text" name="confirm" required placeholder="Confirm Password"></td>
		</tr>
		
		<tr>
		<td><label>Country:</label></td>
		<td><input type="text" name="country" required placeholder="country"></td>
		</tr>
		<tr>
		<td><label>City:</label></td>
		<td><input type="text" name="city" required placeholder="city"></td>
		</tr>
		<tr>
		<td><label>Address:</label></td>
		<td><input type="text" name="address" required placeholder="address"></td>
		</tr>
		<tr>
		<td><label>Image:</label></td>
		<td><input type="file" name="Image" required placeholder="Image"></td>
		</tr>
	    <tr>
		<td><input type="submit" name="register" value="Register"></td>
		</tr>
			</table>
	</form>
-->
	<form method="post">
		
	<div class="loginbox">
    <img src="image/logo4.png" class="avatar">
        <h1>Register Here</h1>
        <form >
			<p>User ID</p>
            <input type="text" name="userid" placeholder="Enter User ID">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
			<p>Confirm password</p>
            <input type="text" name="confirm" placeholder="Enter password again">
			
			<p>Date of birth</p>
            <input type="date" name="date">
			<p>Email</p>
            <input type="text" name="email" placeholder="Enter Email">
			<p>Country</p>
            <input type="text" name="country" placeholder="Enter Country">
			<p>City</p>
            <input type="text" name="city" placeholder="City">
			<p>Address</p>
            <input type="text" name="address" placeholder="Enter Address">
			<p>Image</p>
            <input type="file" name="Image" required placeholder="Image">
            <input type="submit" name="register" value="Register">
            
            <a href="Dangnhap.php">Already have account?</a>
        </form>
     
    </div>
	
	</form>
	<?php
	include("connect.php");
	if (isset($_POST['register'])) {
		$file = $_FILES['Image']['name'];
		$file_tmp = $_FILES['Image']['tmp_name'];
		$path = "avatar/";
		move_uploaded_file($file_tmp,$path.$file);
		$userid=$_POST['userid'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$date=$_POST['date'];
		$email=$_POST['email'];
		$country=$_POST['country'];
		$city=$_POST['city'];
		$address=$_POST['address'];
		$confirm=$_POST['confirm'];
		
		
		
		$sql="insert into users value ('$userid','$username','$password','$date','$email','$country','$city','$address','$confirm','$file')";
		$result = mysqli_query($connect,$sql);
		if ($result){
			echo "<script>alert('Dang ky tai khoan thanh cong!')</script>";
			echo "<script>window.open('Dangnhap.php','_self')</script>";
		}
	else{
		echo"<script>alert('Error')</script>";
	}
	}
	?>
</body>
</html>
