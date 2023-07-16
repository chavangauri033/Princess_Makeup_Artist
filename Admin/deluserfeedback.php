<?php
	$txtnm=$_GET['Fullname'];
	include("connection.php");
	$q="delete from user_feedback where Fullname='$txtnm'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='managefeedback.php'</script>";
?>