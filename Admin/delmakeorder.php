<?php
	$id=$_GET['Makeup_Id'];
	include("connection.php");
	$q="delete from manage_makeuporder where Makeup_Id='$id'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='mgmakeuporder.php'</script>";
?>