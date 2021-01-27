<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	<style type="text/css">
body{
			font-family: Tahoma;
			font-size: 13px;
			width: 1000px;
			margin: 0px auto;
	background: #D1D1D1
		}
		#menu_top1 {
			background: #000000;
			height: 74px;
		}
		#menu_top1 ul{
			margin: 0px;
			padding: 0px;
		}
		#menu_top1 ul li{
			list-style: none;
			float: left;
			
		}
		#menu_top1 ul li a{
			text-decoration: none;
			display: block;
			height: 40px;
			line-height: 40px;
			color: aliceblue;
			padding: 0px 20px 0px 20px;
			border-right: 1px solid #FFFFFF;
		}
		#menu_top1 img{
			width: 90px;
			height: 50px;
			margin-top: 10px;
		}
		#menu_top{
			background: #545454;
			height: 50px;
			
		}
		#banner{
			height: auto;
			width: 1000px;
			text-align: center;
			margin-bottom: 40px;

		}
		#main #left{
			width: 200px;
			float: left;
			min-height: 460px;
			font-size: 10px;
			background: #000000;
		}
		#main #right{
			width: 800px;
			float: left;
			min-height: 400px;
			text-align: center;
		}
		#footer{
			background: #000000;
			width: 1000px;
			text-align: center;
			height: 60px;
			color: aliceblue;
			clear: left;
			line-height: 60px;
		}
		#menu_top ul{
			margin: 0px;
			padding: 0px;
		}
		#menu_top ul li{
			list-style: none;
			float: left;
		}
		#menu_top ul li a{
			text-decoration: none;
			display: block;
			height: 40px;
			line-height: 40px;
			color: aliceblue;
			padding: 0px 44px 0px 44px;
			margin-left: 6px
		}
		#menu_top ul li a.mautrangchu{
			background: #3535D7;
		}
		#banner img{
			width: 1000px;
		}
		#main #left .menu_left h1 {
			
			text-align: center;
			color: aliceblue;
			line-height: 40px;
			
		}
		#main #left .menu_left h1 a{
			
			text-align: center;
			color: aliceblue;
			line-height: 40px;
			text-decoration: none;
			
		}
		#main #right #sanpham {
			float:left;
			margin-right: 30px;
			margin-bottom: 10px;
			text-align: center;
			font-size: 10px;
		}
		#main #right #sanpham img {
			width: 195px;
			height: 195px;
			border: 2px solid #000000;	
			margin-left: 30px;
			
		}
		#main #right #sanpham h2{
			font-size: 10px;
			text-align: center;
			margin-left: 30px;
		}
		#main #right #sanpham p b{
			color: #EA0003;
			text-align: center;
			
		}
		#menu_top1 .box{
         width: 300px;
         height: 40px;
		text-align: center;
		
        }
		.container-1{
  width: 300px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
			
}
		.container-1 input#search{
  width: 300px;
  height: 40px;
  background: #2b303b;
  border: none;
  font-size: 10pt;
  margin-left: 405px;
  color: #63717f;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
			
			
  width: 300px;
  height: 40px;
  background: #2b303b;
  border: none;
  font-size: 10pt;
  margin-left: 405px;
  color: #262626;
  padding-left: 45px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
 
   
    -webkit-transition: background .55s ease;
  -moz-transition: background .55s ease;
  -ms-transition: background .55s ease;
  -o-transition: background .55s ease;
  transition: background .55s ease;

}
		.container-1 input#search::-webkit-input-placeholder {
   color: #65737e;
}
 
.container-1 input#search:-moz-placeholder { /* Firefox 18- */
   color: #65737e;  
}
 
.container-1 input#search::-moz-placeholder {  /* Firefox 19+ */
   color: #65737e;  
}
 
.container-1 input#search:-ms-input-placeholder {  
   color: #65737e;  
}
		.container-1 .icon{
  position: absolute;
  top: 50%;
  margin-left: 420px;
  
  z-index: 1;
  color: #4f5b66;
}
		.container-1 input#search:hover, .container-1 input#search:focus, .container-1 input#search:active{
    outline:none;
    background: #ffffff;
  }
		.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  webkit-transition-duration: 0.4s;
  transition-duration: 0.4s;
  cursor: pointer;
  border-radius: 4px;
		}
		.button:hover,
		.button:active{
			background-color: red;
		}
	</style>
<body>
	<div id="menu_top1">
		<ul>
			<li><img src="../../image/logo.png"></li>
			<li style="color: aliceblue ; font-family:Helvetica; margin-top: 20px; margin-right: 15px; font-size: 30px">Apple Center</li>
			  
		</ul>
	
	</div>
	<div id="menu_top">
		<ul>
			<li><a href="../admin1.php" class="button">Home</a></li>
			<li><a href="view_product.php" class="button">Manage Products</a></li>
			<li><a href="add_product.php" class="button">Edit Products</a></li>
			<li><a href="../Category/view_category.php" class="button">Manage Categories</a></li>
			<li><a href="../Category/add_category.php" class="button">Edit Categories</a></li>
			<li><a href="../../dangxuat.php" class="button">Log Out</a></li>
			
		</ul>
	</div>
	<div id="banner">
		<form method="post" enctype="multipart/form-data">
			
		
			<table align="center" ; style="margin-top: 30px; background: #FFFFFF;border: 2px solid #000000;" >
				<?php 
						include("../../connect.php");
					$ProductID='-1';
					$ProductName='';
		            $ProductPrice='';
		            $ProductDescription='';
		            $CategoryID='';
				    $ProductImage='';
					if (isset($_GET["ProductID"])) {	
						$ProductID = intval($_GET['ProductID']);
						$sql = " select* from product where ProductID = $ProductID";
						$result = mysqli_query($connect, $sql);
						while($row_cat =  mysqli_fetch_array($result)){
							$ProductID =$row_cat['ProductID'];
							$ProductName =$row_cat['ProductName'];
							$ProductDescription =$row_cat['ProductDescription'];
							$ProductPrice =$row_cat['ProductPrice'];
							$CategoryID =$row_cat['CategoryID'];
							$ProductImage=$row_cat['ProductImage'];
							
						}
					}
					echo "
					<tr>
							<td>ProductID</td>
							<td colspan='2'><input type='text' name='ProductID' value='$ProductID'></td>
						</tr>
						<tr>
							<td>ProductName</td>
							<td colspan='2'><input type='text' name='ProductName' value='$ProductName'></td>
						</tr>
						<td>ProductDescription</td>
							<td colspan='2'><input type='text' name='ProductDescription' value='$ProductDescription'></td>
						</tr>
						<tr>
							<td>ProductPrice</td>
							<td colspan='2'><input type='text' name='ProductPrice' value='$ProductPrice'></td>
						</tr>
						<td>CategoryID</td>
							<td colspan='2'><input type='text' name='CategoryID' value='$CategoryID'></td>
						</tr>
						<tr>
							<td>ProductImage</td>
							<td colspan='2'><input type='file' name='ProductImage' value='$ProductImage'></td>
						</tr>
					";
				?>
		
		
	    <tr>
		<td><input type="submit" name="add" value="add"></td>
		<td><input type="submit" name="edit" value="edit"></td>
		<td><input type="submit" name="delete" value="delete"></td>
		</tr>
			</table>
	</form>
	<?php
	include("../../connect.php");
	if (isset($_POST['add'])) {
		$file = $_FILES['ProductImage']['name'];
		$file_tmp = $_FILES['ProductImage']['tmp_name'];
		$path = "../../image/";
		move_uploaded_file($file_tmp,$path.$file);
		$ProductID=$_POST['ProductID'];
		$ProductName=$_POST['ProductName'];
		$ProductPrice=$_POST['ProductPrice'];
		$ProductDescription=$_POST['ProductDescription'];
		$CategoryID=$_POST['CategoryID'];
		
		
		$sql="insert into product value ('$ProductID','$ProductName','$ProductPrice','$ProductDescription','$CategoryID','$file')";
		$result = mysqli_query($connect,$sql);
		if ($result){
			echo "<script>alert('Product has been added successfull!')</script>";
			echo "<script>window.open('add_product.php','_self')</script>";
		}
	else{
		echo"<script>alert('Loi roi ne hihi')</script>";
	}
	}
	
	
	
	
	if(isset($_POST['edit'])){
				$ProductID = $_POST['ProductID'];
				$ProductName = $_POST['ProductName'];
		        $ProductPrice=$_POST['ProductPrice'];
		        $ProductDescription=$_POST['ProductDescription'];
		        $CategoryID=$_POST['CategoryID'];
				$check_exist = mysqli_query($connect,"select * from product");
				$row_cat = mysqli_fetch_array($check_exist);

				$sql="update product set ProductName='$ProductName' where ProductID=$ProductID";
				$result = mysqli_query($connect, $sql);
				if ($result) {
					echo "<script>alert('Product has been edited successfull!')</script>";
					echo "<script>window.open('view_product.php','_self')</script>";
				}
				else {
					echo "<script>alert('Error')</script>";
				}
			}
		
		
		
		if(isset($_POST['delete'])){
				$ProductID = $_POST['ProductID'];
				$sql="delete from product where ProductID=$ProductID";
				$result = mysqli_query($connect, $sql);
				$check_exist = mysqli_query($connect,"select * from product");
				$row_cat = mysqli_fetch_array($check_exist);
				if ($result) {
					echo "<script>alert('Product has been deleted successfull!')</script>";
					echo "<script>window.open('view_product.php','_self')</script>";
				}
				else {
					echo "<script>alert('Error')</script>";

				}
			}


	?>
			
		
	</div>
	<div id="footer">
		<p>Apple Center</p>
		<div id="date" style="color: black">
			<script type="text/javascript">
				var d = new Date();
				var thu=["Chủ nhật","Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy"];
				var thang=["1","2","3","4","5","6","7","8","9","10","11","12"];
				document.getElementById("date").innerHTML=thu[d.getDay()] + "ngày" + d.getDate() +"/"+thang[d.getMonth()]+"/"+d.getFullYear();
			</script>
		</div>
	</div>
		
	
</body>
</html>
