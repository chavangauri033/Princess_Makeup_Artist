<?php
	$id=$_GET['Addmission_Id'];
	include("connection.php");
	$q="delete from addmission where Addmission_Id='$id'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='mgaddmission.php'</script>";
?>