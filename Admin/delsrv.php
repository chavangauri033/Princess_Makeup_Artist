<?php
	$id=$_GET['Service_Id'];
	include("connection.php");
	$q="delete from manage_services where Service_Id='$id'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='manageservice.php'</script>";
?>