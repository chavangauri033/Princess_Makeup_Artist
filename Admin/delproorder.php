<?php
	$oid=$_GET['Order_Id'];
	include("connection.php");
	$q="delete from product_order where Order_Id='$oid'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='manageproductorder.php'</script>";
?>