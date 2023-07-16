<?php
	$id=$_GET['Pr_Id'];
	include("connection.php");
	$q="delete from product_report where Pr_Id='$id'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='manageprodut.php'</script>";
?>