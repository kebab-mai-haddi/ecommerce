<?php

$con = mysqli_connect("localhost","root","","ecommerce");
if(mysqli_connect_errno()){
	echo "Failed to connect toMYSQL: " . mysqli_connect_erroe();
}
?>