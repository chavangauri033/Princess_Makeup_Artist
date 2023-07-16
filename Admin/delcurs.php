<?php
	$id=$_GET['Course_Id'];
	include("connection.php");
	$q="delete from manage_courses where Course_Id='$id'";
	mysqli_query($cn,$q);
	mysqli_close($cn);
	echo "<script>alert('Record Deleted');window.location='managescourses.php'</script>";
?>