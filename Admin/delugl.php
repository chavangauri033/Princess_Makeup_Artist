<?php
	$id=$_GET['Gallery_Id'];
	include("connection.php");
	$q="delete from manage_gallery where Gallery_Id='$id'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='manageurgallery.php'</script>";
?>