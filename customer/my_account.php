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
				<li><a href="../index.php">Home</a></li>
				<li><a href="../all_products.php">All Products</a></li>
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
				
				<div id="sidebar_title">My Account</div>
				
				<ul id="cats">
				<?php
				$user = $_SESSION['customer_email'];
				$get_img = "select * from customers where customer_email = '$user'";
				$run_img = mysqli_query($con,$get_img);
				$row_img = mysqli_fetch_array($run_img);
				$c_image = $row_img['customer_image'];
				$c_name = $row_img['customer_name'];
				echo "<img src='customer_images/$c_image' width='100px' height='100px' /> ";
				?>
					<li><a href="my_account.php?my_orders">My Orders</a></li>
					<li><a href="my_account.php?edit_account">Edit Account</a></li>
					<li><a href="my_account.php?change_pass">Change Password</a></li>
					<li><a href="my_account.php?delete_account">Delete Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
				
				
		</div>
		
			
			
			<div id="content_area" style="background:pink;"> 
			
			
				
				<?php $ip = getIp(); 
					//echo $ip;
				?>
				
				<div id="products_box">
				<?php cart(); ?>
				
				<?php
				if(!isset($_GET['my_orders'])){
					if(!isset($_GET['edit_account'])){
						if(!isset($_GET['change_pass'])){
							if(!isset($_GET['delete_account'])){
								echo "<h2>Welcome: $c_name;?></h2><br>";
								echo "<b>You can see your orders progress by clicking this <a href='my_account.php?my_orders'>link</a></b>";
							}
						}
					}
				}
				?>
				<?php
				if(isset($_GET['edit_account'])){
					include("edit_account.php");
				}
				if(isset($_GET['change_pass'])){
					include("change.php");
				}
				if(isset($_GET['delete_account'])){
					include("delete_account.php");
				}
				?>
				</div>
				
				
				
				</div> 
			</div>
		</div>
	
		
	</div>
	<div id="footer">
		<h2 style="text-align:center; padding-top:30px;">&copy; 2016 by Aviral Srivastava</h2>
	</div>	
	
		








</body>
</html>