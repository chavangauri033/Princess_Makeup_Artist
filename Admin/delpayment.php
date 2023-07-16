<?php
	$pid=$a['Payment_Id'];
	include("connection.php");
	$q="delete from paymentmode where Payment_Id='$id'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='manageorderpayment.php'</script>";
?>