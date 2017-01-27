<?php
include("functions/functions.php");
session_start();
?>
<html>
	<head>
		<title>My Site Title</title>
		<link rel="stylesheet" href="styles/style.css" media="all">
	<head>
	
<body>
	
	<div class="main_wrapper">
		
		<div class="header_wrapper">This is a header!
			<img id="logo" src="images/logo.gif" >
			<img id="banner" src="images/ad_banner.gif" >
		
		</div>
		<div class="menubar">
			<ul id="menu">
				<li><a href="index.php">Home</a></li>
				<li><a href="all_products.php">All Products</a></li>
				<li><a href="customer/my_account.php">My Account</a></li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="cart.php">Shopping Cart</a></li>
				<li><a href="">Contact Us</a></li>
			</ul>
			
			<div id="form">
				<form method="get" action="results.php" enctype="multipart/form-data">
					<input type="text" name="user_query" / >
					<input type="submit" name="search" value="Search" />
				</form>
			</div>
		</div>
	<div class="content_wrapper">
		<div id="sidebar">
				
				<div id="sidebar_title">Categories</div>
				
				<ul id="cats">
					<?php getCats();?>
				</ul>
				
				<div id="sidebar_title">Brands</div>
				
				<ul id="cats">
					<?php
					getBrands();
					?>
				</ul>
		</div>
		
			
			
			<div id="content_area" style="background:pink;"> 
			
			<?php cart(); ?>
				<div id="shopping_cart">
					<span style="float:right; font-size:12px; padding:5px; line-height:40px;">
						<?php
						if(isset($_SESSION['customer_email'])){
							echo "<b>Welcome:</b>" . $_SESSION['customer_email'] . "<b>Your</b>";
						}
						else{
							echo "<b>Wecome Guest</b>";
						}
						
						?>
						<b style="color:yellow;">Shopping Cart -</b> Total Items:<?php total_items() ?> 
						Total Price: <?php  total_price(); ?><a href="cart.php" style="color:yellow;">Go to Cart</a>
						<?php 
						if(!isset($_SESSION['customer_email'])){
							echo "<a href='checkout.php'>Login</a>";
						}
						else{
							echo "<a href='logout.php'>Logout</a>";
						}
						?>
						
						
					</span>
					
				</div>
				
				<?php $ip = getIp(); 
					//echo $ip;
				?>
				
				<div id="products_box">
				
				<?php getPro(); ?>
				
				<?php getCatPro();?>
				<?php getBrandPro();?>
				
				
				</div> 
			</div>
		</div>
	
		
	</div>
	<div id="footer">
		<h2 style="text-align:center; padding-top:30px;">&copy; 2016 by Aviral Srivastava</h2>
	</div>	
	
		








</body>
</html>