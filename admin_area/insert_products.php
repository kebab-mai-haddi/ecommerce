<?php 
include( $_SERVER['DOCUMENT_ROOT'] . '/ecommerce/includes/db.php' ); 
?>

<html>
	<head>
		<title>Inserting Product</title>
		 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
		 <script>tinymce.init({ selector:'textarea' });</script>
	</head>
	
<body bgcolor="skyblue">
	<form action="" method="post" enctype="multipart/form-data">
		<table align="center" width="1000" border="2" bgcolor="orange">
			<tr align="center">
				<td colspan="7"><h2>Insert New Product Here</h2></td>
			</tr>
			<tr>
				<td align="right">Product Title</td>
				<td><input type="text" name="product_title" size="60" required/></td>
			</tr>
			
			<tr>
				<td align="right">Product Category</td>
				<td>
					<select name="product_cat" required>
						<option>Select a category</option>
						<?php
							$get_cats = "select * from categories";
							$run_cats = mysqli_query($con, $get_cats);
							while($row_cats=mysqli_fetch_array($run_cats)){
								$cat_id = $row_cats['cat_id'];
								$cat_title = $row_cats['cat_title'];
								echo "<option value='$cat_id'>$cat_title</option>";
							}
						?>
					</select>
				</td>
			</tr>
			
			<tr>
				<td align="right">Product Brand</td>
				<td>
					<select name="product_brand" required>
						<option>Select a brand</option>
						<?php
							$get_brands = "select * from brand";
							$run_brands = mysqli_query($con, $get_brands);
							while($row_brands=mysqli_fetch_array($run_brands)){
								$brand_id = $row_brands['brand_id'];
								$brand_title = $row_brands['brand_title'];
								echo "<option value='$brand_id'>$brand_title</option>";
							}
						?>
			</tr>
			
			<tr>
				<td align="right">Product Image</td>
				<td><input type="file" name="product_image" /></td>
			</tr>
			
			<tr>
				<td align="right">Product Price</td>
				<td><input type="text" name="product_price" required/></td>
			</tr>
			
			<tr>
				<td align="right">Product Description</td>
				<td><textarea name="product_desc" cols="10" rows="10"></textarea></td>
			</tr>
			
			<tr>
				<td align="right">Product Keywords</td>
				<td><input type="text" name="product_keywords" size="60"/></td>
			</tr>
			
			
			
			<tr align="center">
				<td colspan="7"><input type="submit" name="insert_post" value="Insert Now"/></td>
			</tr>
			
		</table>
	
	</form>









</body>
</html>

<?php

	if(isset($_POST['insert_post'])){
		$product_title = $_POST['product_title'];
		$product_cat = $_POST['product_cat'];
		$product_brand = $_POST['product_brand'];
		$product_price = $_POST['product_price'];
		$product_desc = $_POST['product_desc'];
		$product_keywords = $_POST['product_keywords'];
		$product_image = $_FILES['product_image']['name'];
		$product_image_tmp = $_FILES['product_image']['tmp_name'];
		move_uploaded_file($product_image_tmp,"product_images/$product_image");
		$insert_product = "insert into products 
		
		values('','$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
		
		$insert_pro = mysqli_query($con, $insert_product);
		if($insert_pro){
			echo "<script>alert('Product Has Been inserted!')</script>";
			echo "<script>window.open('insert_products.php','_self')</script>";
		}
	}


?>