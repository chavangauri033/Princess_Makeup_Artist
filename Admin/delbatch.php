<?php
	$id=$_GET['Batch_Id'];
	include("connection.php");
	$q="delete from manage_batch where Batch_Id='$id'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='managebatch.php'</script>";
?>