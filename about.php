<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
	<link rel="stylesheet" href="Fontbox.vn - Helvetica Neue Tieng Viet/OTF/HelveticaNeue-UltraLight.otf">
<title>Untitled Document</title>
	<style type="text/css">
		body{
			font-family: Tahoma;
			font-size: 13px;
			width: 1000px;
			margin: 0px auto;
	
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
         width: 250px;
         height: 40px;
		text-align: center;
		
        }
		.container-1{
  width: 250px;
  vertical-align: middle;
  white-space: nowrap;
  position: relative;
			
}
		.container-1 input#search{
  width: 250px;
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
			
			
  width: 250px;
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
</head>

<body>
	<div id="menu_top1">
		<ul>
			<li><img src="image/logo.png"></li>
			<li style="color: aliceblue ; font-family:Helvetica; margin-top: 20px; margin-right: 15px; font-size: 30px">Apple Center</li>
			  
		</ul>
		<div class="box">
			<form method="get" action="search.php" enctype="multipart/form-data">
               <div class="container-1">
                  <span class="icon"><i class="fa fa-search"></i></span>
                  <input type="text" id="search" placeholder="Search..." style='margin-top: 17px' name="searchName"/>
				  
               </div>
			</form>
       </div>
	</div>
	<div id="menu_top">
		<ul>
			<li><a href="index.php" class="button">Home</a></li>
			<li><a href="tintuc.php" class="button">News</a></li>
			<li><a href="product.php" class="button">Product</a></li>
			<li><a href="baohanh.php" class="button">Repairs and Coverage</a></li>
			<li><a href="?" class="button">About</a></li>
			<li><a href="Dangnhap.php" class="button">Sign In</a></li>
			<li><a href="dang ky.php" class="button">Sign Up</a></li>
			
		</ul>
	</div>
	
	

	<hr>
	
	

	
	<div id="main" style="border: 1px solid #000000">
			<div id="right" ; style="margin-bottom: 30px;margin-left: 20px;">
				<div align="left">
				<h4 style="font-size: 40px">About Apple Center</h4>
				<p style="font-size: 15px">Apple Center was established in 2020, from technology enthusiasts and in-depth knowledge in the online business field in Vietnam. Now, Apple Center has become a famous name in Vietnam in the field of providing high-tech audio-visual products like Apple.</p>
				<p style="font-size: 15px">Coming to any branch of Apple Center, you will be warmly welcomed and a team of qualified staff in the field will advise you to help you choose the right item that fits your budget. friend. With the motto Quality of Service is the original, so we are confident to make you satisfied when leaving.</p>
				<h4 style="font-size: 30px">Our target</h4>
					<p>Our main goal is to make customers feel comfortable and satisfied when buying. Our commitment to quality sales and customer satisfaction is second to none. Our staff advising philosophy is for you to comfortably touch, feel, experiment, ask and discuss your needs.</p>
				<p>At Apple Center, with a team of professional staff we can understand and feel the needs of our customers in the most powerful way, so we are always confident in our sales advice and sales. I've been growing well over the years.</p>
				
				<h4 style="font-size: 30px">Apple Center website</h4>
				<p>Apple Center is one of the leading e-commerce websites in Vietnam specializing in providing information about Apple goods and services.</p>
				<p>We are constantly researching and developing gadgets to best support customers who have trusted and used the service.</p>
		
				<h4 style="font-size: 30px">Other commitments of the Apple Center</h4>
				<p>If for any reason you are not satisfied when buying at Apple Center, contact us immediately. We always listen and want you to come to Apple Center with confidence knowing that we will assist you if there is a problem with your purchases.</p>
				<p>We sincerely thank you and hope you will visit our stores, if you are far away or are not convenient to shop at the shop, please call us for remote purchasing instructions, we will Quality goods are always guaranteed and there is any problem, we will refund you.</p>
				
			    </div>
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
