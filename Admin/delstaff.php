<?php
	$id=$_GET['Staff_Id'];
	include("connection.php");
	$q="delete from manage_staffgallery where Staff_Id='$id'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='managestaff.php'</script>";
?>