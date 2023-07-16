<?php
	$id=$_GET['Fee_Id'];
	include("connection.php");
	$q="delete from manage_fee where Fee_Id='$id'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='managefee.php'</script>";
?>