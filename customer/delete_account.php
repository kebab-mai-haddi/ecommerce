really?
<form action="" method="post">
<input type="submit" name="yes" value="yes" />
<input type="submit" name="no" value="no" />
</form>
<?php
include("includes/db.php");
$user = $_SESSION['customer_email'];
if(isset($_POST['yes'])){
	$delete_customer = "delete from customers where customer_email='$user' ";
	$run_customer = mysqli_query($con,$delete_customer);
	echo "<script>alert('deleted')</script>";
	echo "<script>window.open('../index.php','_self')</script>";
}
else{
	echo "dont fuck around"; 
}
?>
