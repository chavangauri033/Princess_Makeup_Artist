<?php
	$id=$_GET['Gal_Id'];
	include("connection.php");
	$q="delete from manage_student_gallery where Gal_Id='$id'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='managestugallary.php'</script>";
?>