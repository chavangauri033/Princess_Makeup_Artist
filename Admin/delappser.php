<?php
	$id=$_GET['Appointment_Id'];
	include("connection.php");
	$q="delete from appointment where Appointment_Id='$id'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='mgappointment.php'</script>";
?>