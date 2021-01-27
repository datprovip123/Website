<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	$connect = mysqli_connect('localhost','root','','mydtb');
	if(!$connect){
		echo "ket noi that bai";
	}
	?>
</body>
</html>